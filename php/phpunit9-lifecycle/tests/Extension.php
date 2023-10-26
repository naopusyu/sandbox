<?php

declare(strict_types=1);

namespace Tests;

use PHPUnit\Runner\AfterLastTestHook;
use PHPUnit\Runner\BeforeFirstTestHook;

class Extension implements BeforeFirstTestHook, AfterLastTestHook
{
    public function executeBeforeFirstTest(): void
    {
        fwrite(STDOUT, __METHOD__ . PHP_EOL);
    }

    public function executeAfterLastTest(): void
    {
        fwrite(STDOUT, __METHOD__ . PHP_EOL);
    }
}
