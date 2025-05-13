<?php declare(strict_types=1);

namespace Qlimix\Tests\Process\Runtime\Registry;

use PHPUnit\Framework\TestCase;
use Qlimix\Process\Runtime\Registry\Exception\NotFoundException;
use Qlimix\Process\Runtime\Registry\Registry;

final class RegistryTest extends TestCase
{
    private const PROCESS = 'bin/test';

    private Registry $registry;

    protected function setUp(): void
    {
        $this->registry = new Registry();
    }

    public function testShouldRegistry(): void
    {
        $processId = 123;
        $registryId = $this->registry->add($processId, self::PROCESS);

        $this->assertCount(1, $this->registry);
        $process = $this->registry->get($registryId);

        $this->assertSame($registryId, $process->registryId);
        $this->assertSame($processId, $process->processId);
        $this->assertSame(self::PROCESS, $process->process);
    }

    public function testShouldRemove(): void
    {
        $processId = 123;
        $this->registry->add($processId, self::PROCESS);

        $this->assertCount(1, $this->registry);
        $this->registry->remove($processId);
        $this->assertCount(0, $this->registry);
    }

    public function testShouldThrowOnRemove(): void
    {
        $this->expectException(NotFoundException::class);
        $this->registry->remove(123);
    }

    public function testShouldThrowOnGet(): void
    {
        $this->expectException(NotFoundException::class);
        $this->registry->get(123);
    }

    public function testShouldGetAll(): void
    {
        $registryIds = [];
        for($i = 0; $i < 3; $i++) {
            $registryIds[] = $this->registry->add($i, self::PROCESS);
        }

        $all = $this->registry->getAll();
        $this->assertCount(3, $all);
        foreach ($all as $index => $item) {
            $this->assertSame($registryIds[$index], $item->registryId);
            $this->assertSame($index, $item->processId);
            $this->assertSame($item->process, self::PROCESS);
        }
    }
}
