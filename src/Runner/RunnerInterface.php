<?php declare(strict_types=1);

namespace Qlimix\Process\Runner;

use Qlimix\Process\Runner\Exception\RunnerException;

interface RunnerInterface
{
    /**
     * @throws RunnerException
     */
    public function run(): void;
}
