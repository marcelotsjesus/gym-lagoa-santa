<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use VentureDrake\LaravelCrm\Models\Lead;

class LeadExportController extends Controller
{
    public function __invoke(Request $request)
    {    
       // $this->authorize('viewAny', Lead::class);        

        $prefix  = config('laravel-crm.db_table_prefix');
        $search  = $request->string('search')->toString();
        $userIds = array_filter((array) $request->input('user_id', []));
        $labelIds = array_filter((array) $request->input('label_id', []));
        $sourceIds = array_filter((array) $request->input('lead_source_id', []));

        $leads = Lead::whereNull('converted_at')
            ->select(
                $prefix.'leads.*',
                $prefix.'people.first_name',
                $prefix.'people.last_name',
                $prefix.'organizations.name as organization_name'
            )
            ->leftJoin($prefix.'people', $prefix.'leads.person_id', '=', $prefix.'people.id')
            ->leftJoin($prefix.'organizations', $prefix.'leads.organization_id', '=', $prefix.'organizations.id')
            ->when($search, function (Builder $q) use ($prefix, $search) {
                $q->where(function ($q) use ($prefix, $search) {
                    $q->orWhere($prefix.'leads.title', 'like', "%$search%")
                        ->orWhere($prefix.'organizations.name', 'like', "%$search%")
                        ->orWhere($prefix.'people.first_name', 'like', "%$search%")
                        ->orWhere($prefix.'people.last_name', 'like', "%$search%");
                });
            })
            ->when($userIds, fn (Builder $q) => $q->whereIn($prefix.'leads.user_owner_id', $userIds))
            ->when($labelIds, fn (Builder $q) => $q->whereHas('labels', fn (Builder $q) => $q->whereIn('labels.id', $labelIds)))
            ->when($sourceIds, fn (Builder $q) => $q->whereIn('lead_source_id', $sourceIds))
            ->with(['ownerUser', 'pipelineStage', 'leadSource'])
            ->orderByDesc($prefix.'leads.created_at')
            ->get();

        $filename = 'leads_'.now()->format('Y-m-d_His').'.csv';

        return response()->streamDownload(function () use ($leads) {
            $handle = fopen('php://output', 'w');

            fputcsv($handle, [
                'ID', 'Title', 'Amount', 'Currency', 'Contact', 'Organization',
                'Stage', 'Source', 'Owner', 'Created At',
            ]);

            foreach ($leads as $lead) {
                fputcsv($handle, [
                    $lead->lead_id,
                    $lead->title,
                    $lead->amount ? $lead->amount / 100 : '',
                    $lead->currency,
                    trim($lead->first_name.' '.$lead->last_name),
                    $lead->organization_name,
                    $lead->pipelineStage?->name,
                    $lead->leadSource?->name,
                    $lead->ownerUser?->name,
                    $lead->created_at?->format('Y-m-d H:i:s'),
                ]);
            }

            fclose($handle);
        }, $filename, ['Content-Type' => 'text/csv']);
    }
}
