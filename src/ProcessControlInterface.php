<?php declare(strict_types=1);

namespace Qlimix\Process;

use Qlimix\Process\Exception\ProcessException;

interface ProcessControlInterface
{
    /**
     * @throws ProcessException
     */
    public function status(): ?bool;

    /**
     * @throws ProcessException
     */
    public function isProcessRunning(int $id): bool;

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
    public function stopProcess(int $id): void;

    /**
     * @throws ProcessException
     */
    public function stopProcesses(): void;
}
