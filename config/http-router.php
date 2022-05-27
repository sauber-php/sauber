<?php

declare(strict_types=1);

use App\Http\Middleware\TrimStrings;
use Sauber\Http\Router;

$router = new Router(
    container: require __DIR__ . '/container.php',
);

$router->middleware(new TrimStrings());

$router->get(
    path: '/',
    handler: App\Http\Handlers\RootHandler::class,
)->setName('root');

return $router;
