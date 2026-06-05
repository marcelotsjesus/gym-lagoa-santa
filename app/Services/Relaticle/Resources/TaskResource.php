<?php

namespace App\Services\Relaticle\Resources;

use App\Services\Relaticle\Responses\PaginatedResponse;

class TaskResource extends BaseResource
{
    /**
     * @param  array{
     *   filter?: array{title?: string, assigned_to_me?: string, company_id?: string, people_id?: string, opportunity_id?: string, custom_fields?: string},
     *   sort?: string,
     *   include?: string,
     *   per_page?: int,
     *   page?: int,
     *   cursor?: string,
     * } $params
     */
    public function list(array $params = []): PaginatedResponse
    {
        return $this->paginate('/v1/tasks', $params);
    }

    public function get(string $id): array
    {
        return $this->client->get("/v1/tasks/{$id}")['data'] ?? [];
    }

    /**
     * @param  array{
     *   title: string,
     *   company_ids?: string[],
     *   people_ids?: string[],
     *   opportunity_ids?: string[],
     *   assignee_ids?: string[],
     *   custom_fields?: array,
     * } $data
     */
    public function create(array $data): array
    {
        return $this->client->post('/v1/tasks', $data)['data'] ?? [];
    }

    /**
     * @param  array{
     *   title?: string,
     *   company_ids?: string[],
     *   people_ids?: string[],
     *   opportunity_ids?: string[],
     *   assignee_ids?: string[],
     *   custom_fields?: array,
     * } $data
     */
    public function update(string $id, array $data): array
    {
        return $this->client->put("/v1/tasks/{$id}", $data)['data'] ?? [];
    }

    public function delete(string $id): void
    {
        $this->client->delete("/v1/tasks/{$id}");
    }
}
