<?php

declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use Spatie\Snapshots\MatchesSnapshots;

class SnapshotTest extends TestCase
{
    use MatchesSnapshots;

    #[Test]
    public function snapshot(): void
    {
        $this->assertMatchesJsonSnapshot(json_render());
    }
}
