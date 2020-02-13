<?php declare(strict_types=1);

namespace Qlimix\Tests\Process\Runtime;

use Exception;
use PHPUnit\Framework\TestCase;
use Qlimix\Process\Runtime\Reason;

final class ReasonTest extends TestCase
{
    public function testShouldReason(): void
    {
        $foo = 'foo';
        $reason = new Reason($foo);

        $this->assertSame($foo, $reason->getMessage());
    }

    public function testShouldReasonFromException(): void
    {
        $exception = new Exception();
        $reason = Reason::fromException($exception);

        $this->assertSame((string) $exception, $reason->getMessage());
    }
}
