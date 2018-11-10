<?php declare(strict_types=1);

namespace Qlimix\Process;

interface ProcessControlInterface
{
    /**
     * returns a pid that exited/returned if any
     *
     * @return int|null
     */
    public function status(): ?int;

    /**
     * @param int $pid
     *
     * @return bool
     */
    public function isProcessRunning(int $pid): bool;

    public function startProcess(ProcessInterface $process): int;

    /**
     * @param ProcessInterface[] $processes
     *
     * @return int
     */
    public function startProcesses(array $processes): int;

    public function stopProcess(int $pid): void;

    public function stopProcesses(): void;
}
