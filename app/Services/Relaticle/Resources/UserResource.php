<?php

namespace App\Services\Relaticle\Resources;

class UserResource extends BaseResource
{
    public function current(): array
    {
        return $this->client->get('/v1/user')['data'] ?? [];
    }
}
