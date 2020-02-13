<?php declare(strict_types=1);

namespace Qlimix\Process\Runtime;

use Throwable;

final class Reason
{
    private string $message;

    public function __construct(string $message)
    {
        $this->message = $message;
    }

    public function getMessage(): string
    {
        return $this->message;
    }

    public static function fromException(Throwable $exception): self
    {
        return new self((string) $exception);
    }
}
