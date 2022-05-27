<?php

declare(strict_types=1);

namespace App\Http\Handlers;

use Psr\Http\Message\ServerRequestInterface;

final class RootHandler
{
    /**
     * @param ServerRequestInterface $request
     * @return array<string,string>
     */
    public function __invoke(ServerRequestInterface $request): array
    {
        return [
            'message' => 'Root Handler.'
        ];
    }
}
