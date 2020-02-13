<?php declare(strict_types=1);

namespace Qlimix\Process\Manager;

use Qlimix\Process\Manager\Exception\ManagerException;

interface ManagerInterface
{
    /**
     * @throws ManagerException
     */
    public function maintain(): void;

    public function stop(): void;

    public function continue(): bool;

    /**
     * @throws ManagerException
     */
    public function initialize(): void;
}
