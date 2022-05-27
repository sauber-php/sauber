<?php

declare(strict_types=1);

use Sauber\Http\HttpKernel;
use Sauber\Http\Request;

require __DIR__ . '/../vendor/autoload.php';

$router = require __DIR__ . '/../config/http-router.php';

HttpKernel::using(
    requestHandler: $router,
)->dispatch(
    request: Request::capture(),
);
