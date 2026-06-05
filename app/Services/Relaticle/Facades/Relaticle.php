<?php

namespace App\Services\Relaticle\Facades;

use App\Services\Relaticle\RelaticleManager;
use App\Services\Relaticle\Resources\CompanyResource;
use App\Services\Relaticle\Resources\CustomFieldResource;
use App\Services\Relaticle\Resources\NoteResource;
use App\Services\Relaticle\Resources\OpportunityResource;
use App\Services\Relaticle\Resources\PeopleResource;
use App\Services\Relaticle\Resources\TaskResource;
use App\Services\Relaticle\Resources\UserResource;
use Illuminate\Support\Facades\Facade;

/**
 * @method static CompanyResource      companies()
 * @method static PeopleResource       people()
 * @method static OpportunityResource  opportunities()
 * @method static TaskResource         tasks()
 * @method static NoteResource         notes()
 * @method static CustomFieldResource  customFields()
 * @method static UserResource         user()
 *
 * @see RelaticleManager
 */
class Relaticle extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return RelaticleManager::class;
    }
}
