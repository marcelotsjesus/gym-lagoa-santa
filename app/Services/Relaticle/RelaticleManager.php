<?php

namespace App\Services\Relaticle;

use App\Services\Relaticle\Resources\CompanyResource;
use App\Services\Relaticle\Resources\CustomFieldResource;
use App\Services\Relaticle\Resources\NoteResource;
use App\Services\Relaticle\Resources\OpportunityResource;
use App\Services\Relaticle\Resources\PeopleResource;
use App\Services\Relaticle\Resources\TaskResource;
use App\Services\Relaticle\Resources\UserResource;

class RelaticleManager
{
    public function __construct(private readonly RelaticleClient $client) {}

    public function companies(): CompanyResource
    {
        return new CompanyResource($this->client);
    }

    public function people(): PeopleResource
    {
        return new PeopleResource($this->client);
    }

    public function opportunities(): OpportunityResource
    {
        return new OpportunityResource($this->client);
    }

    public function tasks(): TaskResource
    {
        return new TaskResource($this->client);
    }

    public function notes(): NoteResource
    {
        return new NoteResource($this->client);
    }

    public function customFields(): CustomFieldResource
    {
        return new CustomFieldResource($this->client);
    }

    public function user(): UserResource
    {
        return new UserResource($this->client);
    }
}
