<?php declare(strict_types=1);

namespace Qlimix\Process;

use Qlimix\Process\Exception\ProcessException;

interface ProcessManagerInterface
{
    /**
     * @throws ProcessException
     */
    public function maintain(): void;

    public function stop(): void;

    public function continue(): bool;

    /**
     * @throws ProcessException
     */
    public function initialize(): void;
}
