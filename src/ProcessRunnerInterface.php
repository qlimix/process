<?php declare(strict_types=1);

namespace Qlimix\Process;

use Qlimix\Process\Exception\ProcessRunnerException;

interface ProcessRunnerInterface
{
    /**
     * @throws ProcessRunnerException
     */
    public function run(): void;
}
