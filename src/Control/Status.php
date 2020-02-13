<?php declare(strict_types=1);

namespace Qlimix\Process\Control;

final class Status
{
    private int $id;

    private string $process;

    private bool $success;

    public function __construct(int $id, string $process, bool $success)
    {
        $this->id = $id;
        $this->process = $process;
        $this->success = $success;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getProcess(): string
    {
        return $this->process;
    }

    public function isSuccess(): bool
    {
        return $this->success;
    }
}
