<?php

declare(strict_types=1);

namespace Tests;

use PHPUnit\Event\TestRunner\Finished;
use PHPUnit\Event\TestRunner\FinishedSubscriber;
use PHPUnit\Event\TestRunner\Started;
use PHPUnit\Event\TestRunner\StartedSubscriber;
use PHPUnit\Runner\Extension\Extension as RunnerExtension;
use PHPUnit\Runner\Extension\Facade;
use PHPUnit\Runner\Extension\ParameterCollection;
use PHPUnit\TextUI\Configuration\Configuration;

class Extension implements RunnerExtension
{
    public function bootstrap(Configuration $configuration, Facade $facade, ParameterCollection $parameters): void
    {
        $facade->registerSubscriber(new class($this) implements StartedSubscriber {
            public function notify(Started $event): void
            {
                fwrite(STDOUT, __METHOD__ . PHP_EOL);
            }
        });
        $facade->registerSubscriber(new class($this) implements FinishedSubscriber {
            public function notify(Finished $event): void
            {
                fwrite(STDOUT, __METHOD__ . PHP_EOL);
            }
        });
    }
}
