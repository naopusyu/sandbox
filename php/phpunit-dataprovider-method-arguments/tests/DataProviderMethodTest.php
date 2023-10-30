<?php

declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

/**
 * これはPHPUnit 10.xで確認したテストクラス
 */
class PHPUnit10DataProviderMethodTest extends TestCase
{
    public static function provider(string $testMethod): array
    {
        fwrite(STDOUT, $testMethod . PHP_EOL);
        return [
            [1],
        ];
    }

    #[DataProvider('provider')]
    public function testMethod(int $a)
    {
        $this->assertSame(1, $a);
    }
}
