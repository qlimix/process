<?php declare(strict_types=1);

namespace Qlimix\Process\Control;

use Qlimix\Process\Control\Exception\ControlException;

interface ControlInterface
{
    /**
     * @throws ControlException
     */
    public function status(): ?Status;

    /**
     * @throws ControlException
     */
    public function start(string $process): int;

    /**
     * @param string[] $processes
     *
     * @return int[]
     *
     * @throws ControlException
     */
    public function startMultiple(array $processes): array;

    /**
     * @throws ControlException
     */
    public function stop(int $id): void;

    /**
     * @throws ControlException
     */
    public function stopAll(): void;
}
