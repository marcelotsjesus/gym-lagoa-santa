<?php

namespace App\Services\Relaticle\Resources;

use App\Services\Relaticle\Responses\PaginatedResponse;

class PeopleResource extends BaseResource
{
    /**
     * @param  array{
     *   filter?: array{name?: string, company_id?: string, custom_fields?: string},
     *   sort?: string,
     *   include?: string,
     *   per_page?: int,
     *   page?: int,
     *   cursor?: string,
     * } $params
     */
    public function list(array $params = []): PaginatedResponse
    {
        return $this->paginate('/v1/people', $params);
    }

    public function get(string $id): array
    {
        return $this->client->get("/v1/people/{$id}")['data'] ?? [];
    }

    /**
     * @param  array{name: string, company_id?: string, custom_fields?: array} $data
     */
    public function create(array $data): array
    {
        return $this->client->post('/v1/people', $data)['data'] ?? [];
    }

    /**
     * @param  array{name?: string, company_id?: string, custom_fields?: array} $data
     */
    public function update(string $id, array $data): array
    {
        return $this->client->put("/v1/people/{$id}", $data)['data'] ?? [];
    }

    public function delete(string $id): void
    {
        $this->client->delete("/v1/people/{$id}");
    }
}
