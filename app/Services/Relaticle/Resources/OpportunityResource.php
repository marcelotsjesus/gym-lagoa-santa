<?php

namespace App\Services\Relaticle\Resources;

use App\Services\Relaticle\Responses\PaginatedResponse;

class OpportunityResource extends BaseResource
{
    /**
     * @param  array{
     *   filter?: array{name?: string, company_id?: string, contact_id?: string, custom_fields?: string},
     *   sort?: string,
     *   include?: string,
     *   per_page?: int,
     *   page?: int,
     *   cursor?: string,
     * } $params
     */
    public function list(array $params = []): PaginatedResponse
    {
        return $this->paginate('/v1/opportunities', $params);
    }

    public function get(string $id): array
    {
        return $this->client->get("/v1/opportunities/{$id}")['data'] ?? [];
    }

    /**
     * @param  array{name: string, company_id?: string, contact_id?: string, custom_fields?: array} $data
     */
    public function create(array $data): array
    {
        return $this->client->post('/v1/opportunities', $data)['data'] ?? [];
    }

    /**
     * @param  array{name?: string, company_id?: string, contact_id?: string, custom_fields?: array} $data
     */
    public function update(string $id, array $data): array
    {
        return $this->client->put("/v1/opportunities/{$id}", $data)['data'] ?? [];
    }

    public function delete(string $id): void
    {
        $this->client->delete("/v1/opportunities/{$id}");
    }
}
