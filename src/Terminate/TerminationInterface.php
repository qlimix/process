<?php declare(strict_types=1);

namespace Qlimix\Process\Terminate;

interface TerminationInterface
{
    public function success(): void;

    public function fail(): void;
}
