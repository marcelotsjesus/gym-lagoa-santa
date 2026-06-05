<?php

namespace App\Services\Relaticle\Responses;

class PaginatedResponse
{
    public readonly array $data;
    public readonly array $links;
    public readonly array $meta;

    public function __construct(array $response)
    {
        $this->data  = $response['data'] ?? [];
        $this->links = $response['links'] ?? [];
        $this->meta  = $response['meta'] ?? [];
    }

    public function total(): int
    {
        return $this->meta['total'] ?? 0;
    }

    public function currentPage(): int
    {
        return $this->meta['current_page'] ?? 1;
    }

    public function lastPage(): int
    {
        return $this->meta['last_page'] ?? 1;
    }

    public function perPage(): int
    {
        return $this->meta['per_page'] ?? 15;
    }

    public function hasMorePages(): bool
    {
        return $this->currentPage() < $this->lastPage();
    }

    public function nextCursor(): ?string
    {
        return $this->meta['next_cursor'] ?? null;
    }
}
