<?php

namespace App\Services\Relaticle\Resources;

use App\Services\Relaticle\RelaticleClient;
use App\Services\Relaticle\Responses\PaginatedResponse;

abstract class BaseResource
{
    public function __construct(protected readonly RelaticleClient $client) {}

    protected function paginate(string $path, array $params = []): PaginatedResponse
    {
        $response = $this->client->get($path, $this->buildQuery($params));

        return new PaginatedResponse($response);
    }

    protected function buildQuery(array $params): array
    {
        return array_filter($params, fn ($v) => $v !== null && $v !== '');
    }
}
