<?php

namespace App\Services\Relaticle;

use App\Services\Relaticle\Exceptions\RelaticleApiException;
use Illuminate\Http\Client\PendingRequest;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;

class RelaticleClient
{
    private PendingRequest $http;

    public function __construct(
        private readonly string $baseUrl,
        private readonly string $token,
        private readonly int $timeout = 30,
    ) {
        $this->http = Http::baseUrl(rtrim($baseUrl, '/'))
            ->withToken($token)
            ->timeout($timeout)
            ->acceptJson();
    }

    public function get(string $path, array $query = []): array
    {
        $response = $this->http->get($path, $query);

        return $this->handle($response);
    }

    public function post(string $path, array $data = []): array
    {
        $response = $this->http->post($path, $data);

        return $this->handle($response);
    }

    public function put(string $path, array $data = []): array
    {
        $response = $this->http->put($path, $data);

        return $this->handle($response);
    }

    public function delete(string $path): void
    {
        $response = $this->http->delete($path);

        if ($response->failed() && $response->status() !== 204) {
            throw new RelaticleApiException($response);
        }
    }

    private function handle(Response $response): array
    {
        if ($response->failed()) {
            throw new RelaticleApiException($response);
        }

        return $response->json() ?? [];
    }
}
