<?php

namespace App\Services\Relaticle\Resources;

use App\Services\Relaticle\Responses\PaginatedResponse;

class CustomFieldResource extends BaseResource
{
    /**
     * @param  array{
     *   entity_type?: 'company'|'people'|'opportunity'|'task'|'note',
     *   per_page?: int,
     * } $params
     */
    public function list(array $params = []): PaginatedResponse
    {
        return $this->paginate('/v1/custom-fields', $params);
    }
}
