<?php

declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\TestCase;
use Throwable;

class LifecycleTest extends TestCase
{
    public static function setUpBeforeClass(): void
    {
        fwrite(STDOUT, __METHOD__ . PHP_EOL);
    }

    public static function tearDownAfterClass(): void
    {
        fwrite(STDOUT, PHP_EOL . __METHOD__ . PHP_EOL);
    }

    protected function setUp(): void
    {
        fwrite(STDOUT, PHP_EOL . __METHOD__ . PHP_EOL);
    }

    protected function tearDown(): void
    {
        fwrite(STDOUT, __METHOD__ . PHP_EOL);
    }

    protected function assertPreConditions(): void
    {
        fwrite(STDOUT, __METHOD__ . PHP_EOL);
    }

    protected function assertPostConditions(): void
    {
        fwrite(STDOUT, __METHOD__ . PHP_EOL);
    }

    protected function onNotSuccessfulTest(Throwable $t): never
    {
        fwrite(STDOUT, __METHOD__ . PHP_EOL);
        throw $t;
    }

    public static function dataProvider(): array
    {
        fwrite(STDOUT, __METHOD__ . PHP_EOL);
        return [
            [1],
            [2],
            [3],
        ];
    }

    public function testMethod1(): void
    {
        fwrite(STDOUT, __METHOD__ . PHP_EOL);
        $this->assertTrue(true);
    }

    public function testMethod2(): void
    {
        fwrite(STDOUT, __METHOD__ . PHP_EOL);
        $this->assertTrue(false);
    }

    /**
     * @dataProvider dataProvider
     */
    public function testMethod3(int $a): void
    {
        fwrite(STDOUT, __METHOD__ . PHP_EOL);
        $this->assertTrue(true);
    }
}
