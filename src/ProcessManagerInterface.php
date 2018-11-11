<?php declare(strict_types=1);

namespace Qlimix\Process;

use Qlimix\Process\Exception\ProcessException;

interface ProcessManagerInterface
{
    /**
     * @throws ProcessException
     */
    public function run(): void;
}
