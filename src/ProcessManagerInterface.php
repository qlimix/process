<?php declare(strict_types=1);

namespace Qlimix\Process;

interface ProcessManagerInterface
{
    public function run(): void;
}
