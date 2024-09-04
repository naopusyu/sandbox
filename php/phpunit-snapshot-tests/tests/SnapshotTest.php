<?php

declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

class SnapshotTest extends TestCase
{
    use MyMatchesSnapshots;

    #[Test]
    public function snapshot(): void
    {
        $this->assertMatchesJsonSnapshot(json_render());
    }
}
