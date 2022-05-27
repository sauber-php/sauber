<?php

declare(strict_types=1);

namespace App\Console\Commands;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

final class ServeCommand
{
    public function __invoke(InputInterface $input, OutputInterface $output): void
    {
        exec(
            command: 'php -S localhost:8000 public/index.php',
        );
    }
}
