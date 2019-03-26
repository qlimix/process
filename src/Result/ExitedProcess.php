<?php declare(strict_types=1);

namespace Qlimix\Process\Result;

final class ExitedProcess
{
    /** @var int */
    private $pid;

    /** @var bool */
    private $success;

    public function __construct(int $pid, bool $success)
    {
        $this->pid = $pid;
        $this->success = $success;
    }

    public function getPid(): int
    {
        return $this->pid;
    }

    public function success(): bool
    {
        return $this->success;
    }
}
