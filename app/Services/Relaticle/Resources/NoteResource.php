<?php

namespace App\Services\Relaticle\Resources;

use App\Services\Relaticle\Responses\PaginatedResponse;

class NoteResource extends BaseResource
{
    /**
     * @param  array{
     *   filter?: array{title?: string, notable_type?: string, notable_id?: string, custom_fields?: string},
     *   sort?: string,
     *   include?: string,
     *   per_page?: int,
     *   page?: int,
     *   cursor?: string,
     * } $params
     */
    public function list(array $params = []): PaginatedResponse
    {
        return $this->paginate('/v1/notes', $params);
    }

    public function get(string $id): array
    {
        return $this->client->get("/v1/notes/{$id}")['data'] ?? [];
    }

    /**
     * @param  array{
     *   title: string,
     *   company_ids?: string[],
     *   people_ids?: string[],
     *   opportunity_ids?: string[],
     *   custom_fields?: array,
     * } $data
     */
    public function create(array $data): array
    {
        return $this->client->post('/v1/notes', $data)['data'] ?? [];
    }

    /**
     * @param  array{
     *   title?: string,
     *   company_ids?: string[],
     *   people_ids?: string[],
     *   opportunity_ids?: string[],
     *   custom_fields?: array,
     * } $data
     */
    public function update(string $id, array $data): array
    {
        return $this->client->put("/v1/notes/{$id}", $data)['data'] ?? [];
    }

    public function delete(string $id): void
    {
        $this->client->delete("/v1/notes/{$id}");
    }
}
