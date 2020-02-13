<?php declare(strict_types=1);

namespace Qlimix\Tests\Process\Runtime\Registry;

use PHPUnit\Framework\TestCase;
use Qlimix\Process\Runtime\Registry\Process;

final class ProcessTest extends TestCase
{
    public function testShouldProcess(): void
    {
        $registryId = 1;
        $processId = 2;
        $processTest = 'bin/test';

        $process = new Process($registryId, $processId, $processTest);

        $this->assertSame($registryId, $process->getRegistryId());
        $this->assertSame($processId, $process->getProcessId());
        $this->assertSame($processTest, $process->getProcess());
    }
}
