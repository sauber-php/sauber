<?php

declare(strict_types = 1);

use Sauber\Framework\Application;

require __DIR__ . '/../vendor/autoload.php';

$container = require __DIR__ . '/../config/container.php';

$app = Application::boot(
    container: $container,
);

$app->get(
    path: '/',
    handler: App\Http\Handlers\RootHandler::class,
)->setName('root');

$app->run();
