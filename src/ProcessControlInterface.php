<?php declare(strict_types=1);

namespace Qlimix\Process;

use Qlimix\Process\Exception\ProcessException;

interface ProcessControlInterface
{
    /**
     * returns a pid that exited/returned if any
     *
     * @return int|null
     *
     * @throws ProcessException
     */
    public function status(): ?int;

    /**
     * @param int $pid
     *
     * @return bool
     *
     * @throws ProcessException
     */
    public function isProcessRunning(int $pid): bool;

    /**
     * @param ProcessInterface $process
     *
     * @return int
     *
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
     * @param int $pid
     *
     * @throws ProcessException
     */
    public function stopProcess(int $pid): void;

    /**
     * @throws ProcessException
     */
    public function stopProcesses(): void;

    /**
     * @throws ProcessException
     */
    public function normalExit(int $pid): bool;
}
