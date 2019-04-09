<?php declare(strict_types=1);

namespace Qlimix\Process;

use Qlimix\Process\Exception\ProcessException;
use Qlimix\Process\Result\ExitedProcess;

interface ProcessControlInterface
{
    /**
     * @throws ProcessException
     */
    public function status(): ?ExitedProcess;

    /**
     * @throws ProcessException
     */
    public function isProcessRunning(int $pid): bool;

    /**
     * @throws ProcessException
     */
    public function startProcess(ProcessInterface $process): int;

    /**
     * @param ProcessInterface[] $processes
     *
     * @return int[]
     *
     * @throws ProcessException
     */
    public function startProcesses(array $processes): array;

    /**
     * @throws ProcessException
     */
    public function stopProcess(int $pid): void;

    /**
     * @throws ProcessException
     */
    public function stopProcesses(): void;
}
