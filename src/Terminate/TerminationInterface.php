<?php declare(strict_types=1);

namespace Qlimix\Process\Terminate;

interface TerminationInterface
{
    public function success(): never;

    public function fail(int $code): never;
}
