<?php declare(strict_types=1);

namespace Qlimix\Process\Runtime;

use Throwable;

final readonly class Reason
{
    public function __construct(public string $message)
    {
    }

    public static function fromException(Throwable $exception): self
    {
        return new self((string) $exception);
    }
}
