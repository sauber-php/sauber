<?php

declare(strict_types=1);

use App\Http\Handlers\RootHandler;
use JustSteveKing\StatusCode\Http;

it('can get the correct status code from the request', function () {
    $app = $this->getApp();
    $app->get('/', RootHandler::class);

    $response = $app->router()->handle(
        request: $this->createRequest(
            method: 'GET',
            path: '/',
        ),
    );

    expect(
        $response->getStatusCode(),
    )->toEqual(Http::OK);
});

