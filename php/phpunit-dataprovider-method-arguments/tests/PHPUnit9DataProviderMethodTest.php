<?php

declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;

/**
 * これはPHPUnit 9.xで確認したテストクラス
 */
class PHPUnit9DataProviderMethodTest extends TestCase
{
    public function provider(string $testMethod): array
    {
        fwrite(STDOUT, $testMethod . PHP_EOL);
        return [
            [1],
        ];
    }

    /**
     * @dataProvider provider
     */
    public function testMethod1(int $a)
    {
        $this->assertSame(1, $a);
    }

    /**
     * @dataProvider provider
     */
    public function testMethod2(int $a)
    {
        $this->assertSame(1, $a);
    }
}
