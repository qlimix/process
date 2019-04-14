<?php declare(strict_types=1);

namespace Qlimix\Process\Terminate;

final class ExitTermination implements TerminationInterface
{
    /**
     * @inheritDoc
     */
    public function success(): void
    {
        exit(0);
    }

    /**
     * @inheritDoc
     */
    public function fail(): void
    {
        exit(1);
    }
}
