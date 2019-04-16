<?php declare(strict_types=1);

namespace Qlimix\Process\Result;

use Qlimix\Process\ProcessInterface;

final class ExitedProcess
{
    /** @var ProcessInterface */
    private $process;

    /** @var bool */
    private $success;

    public function __construct(ProcessInterface $process, bool $success)
    {
        $this->process = $process;
        $this->success = $success;
    }

    public function getProcess(): ProcessInterface
    {
        return $this->process;
    }

    public function isSuccess(): bool
    {
        return $this->success;
    }
}
