<?php

declare(strict_types=1);

namespace Tests;

use Spatie\Snapshots\MatchesSnapshots;

trait MyMatchesSnapshots
{
    use MatchesSnapshots;

    public function assertMatchesJsonSnapshot(array|string|null|int|float|bool $actual): void
    {
        $this->assertMatchesSnapshot($actual, new MyJsonDriver());
    }
}
