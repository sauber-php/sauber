<?php

declare(strict_types=1);

namespace Tests;

use Laminas\Diactoros\Request;
use Laminas\Diactoros\ServerRequest;
use Laminas\Diactoros\Uri;
use PHPUnit\Framework\TestCase as PHPUnitTestCase;
use Sauber\Framework\Application;

class TestCase extends PHPUnitTestCase
{
    /**
     * @return Application
     */
    protected function getApp(): Application
    {
        return Application::boot(
            container: require __DIR__ . '/../config/container.php',
        );
    }

    /**
     * @param string $method
     * @param string $path
     * @param array $headers
     * @return ServerRequest
     */
    protected function createRequest(
        string $method,
        string $path,
        array $headers = [],
    ): ServerRequest
    {
        return new ServerRequest(
            uri: $path,
            method: $method,
            headers: $headers,
        );
    }
}
