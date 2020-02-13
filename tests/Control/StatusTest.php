<?php declare(strict_types=1);

namespace Qlimix\Tests\Process\Control;

use PHPUnit\Framework\TestCase;
use Qlimix\Process\Control\Status;

final class StatusTest extends TestCase
{
    public function testShouldStatus(): void
    {
        $id = 123;
        $process = 'bin/test';
        $success = true;

        $status = new Status($id, $process, $success);

        $this->assertSame($id, $status->getId());
        $this->assertSame($process, $status->getProcess());
        $this->assertSame($success, $status->isSuccess());
    }
}
