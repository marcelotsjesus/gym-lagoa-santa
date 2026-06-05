<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Livewire\Attributes\Layout;
use Livewire\Component;
use VentureDrake\LaravelCrm\Models\Lead;
use VentureDrake\LaravelCrm\Models\LeadStatus;
use VentureDrake\LaravelCrm\Models\Pipeline;
use VentureDrake\LaravelCrm\Services\LeadService;
use VentureDrake\LaravelCrm\Services\PersonService;

#[Layout('components.layouts.landing')]
class LandingPage extends Component
{
    public string $firstName = '';

    public string $lastName = '';

    public string $email = '';

    public string $phone = '';

    public string $leadMessage = '';

    public bool $submissionSuccessful = false;

    public ?string $submittedLeadId = null;

    protected array $validationAttributes = [
        'firstName' => 'primeiro nome',
        'lastName' => 'sobrenome',
        'email' => 'email',
        'phone' => 'telefone',
        'leadMessage' => 'mensagem',
    ];

    protected function rules(): array
    {
        return [
            'firstName' => ['required', 'string', 'min:2', 'max:100'],
            'lastName' => ['required', 'string', 'min:2', 'max:100'],
            'email' => ['required', 'email', 'max:150'],
            'phone' => ['required', 'string', 'min:8', 'max:30'],
            'leadMessage' => ['required', 'string', 'min:10', 'max:2000'],
        ];
    }

    public function submitLead(PersonService $personService, LeadService $leadService): void
    {
        $validated = $this->validate();

        $ownerUserId = $this->resolveOwnerUserId();

        if (! $ownerUserId) {
            $this->addError('form', 'Nenhum usuario do backoffice foi encontrado para receber leads.');

            return;
        }

        $this->ensureLeadStatusExists();

        $lead = DB::transaction(function () use ($validated, $ownerUserId, $personService, $leadService) {
            $fullName = trim($validated['firstName'].' '.$validated['lastName']);

            $person = $personService->createFromRelated(new Request([
                'person_name' => $fullName,
                'email' => $validated['email'],
                'email_type' => 'work',
                'email_primary' => true,
                'phone' => $validated['phone'],
                'phone_type' => 'mobile',
                'phone_primary' => true,
                'user_owner_id' => $ownerUserId,
            ]));

            return $leadService->create(new Request([
                'title' => 'Lead do site - '.$fullName,
                'description' => $validated['leadMessage'],
                'currency' => config('laravel-crm.currency', 'USD'),
                'user_owner_id' => $ownerUserId,
                'pipeline_stage_id' => $this->resolvePipelineStageId(),
                'lead_source_id' => null,
            ]), $person);
        });

        $this->reset(['firstName', 'lastName', 'email', 'phone', 'leadMessage']);
        $this->resetValidation();

        $this->submissionSuccessful = true;
        $this->submittedLeadId = $lead->lead_id;
    }

    public function render()
    {
        return view('livewire.landing-page');
    }

    protected function resolveOwnerUserId(): ?int
    {
        $crmOwnerEmail = config('laravel-crm.crm_owner');

        if ($crmOwnerEmail) {
            $ownerUserId = User::query()->where('email', $crmOwnerEmail)->value('id');

            if ($ownerUserId) {
                return $ownerUserId;
            }
        }

        return User::query()->orderBy('id')->value('id');
    }

    protected function resolvePipelineStageId(): ?int
    {
        $pipeline = Pipeline::query()
            ->where('model', Lead::class)
            ->first();

        if (! $pipeline) {
            return null;
        }

        return $pipeline->pipelineStages()->orderBy('id')->value('id');
    }

    protected function ensureLeadStatusExists(): void
    {
        if (LeadStatus::query()->exists()) {
            return;
        }

        LeadStatus::query()->create([
            'external_id' => (string) Str::uuid(),
            'name' => 'Novo',
            'description' => 'Status padrao para leads recebidos pela landing page.',
            'order' => 1,
        ]);
    }
}