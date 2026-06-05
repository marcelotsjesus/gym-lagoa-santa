<?php

namespace App\Services\Relaticle\Exceptions;

use Illuminate\Http\Client\Response;
use RuntimeException;

class RelaticleApiException extends RuntimeException
{
    public readonly int $statusCode;
    public readonly array $errors;

    public function __construct(Response $response)
    {
        $this->statusCode = $response->status();
        $body             = $response->json() ?? [];
        $this->errors     = $body['errors'] ?? [];

        $message = $body['message'] ?? "Relaticle API error [{$this->statusCode}]";

        parent::__construct($message, $this->statusCode);
    }
}
