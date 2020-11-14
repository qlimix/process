<?php declare(strict_types=1);

namespace Qlimix\Process\Terminate;

final class ExitTermination implements TerminationInterface
{
    /**
     * @SuppressWarnings("ExitExpression")
     * @inheritDoc
     */
    public function success(): void
    {
        exit(0);
    }

    /**
     * @SuppressWarnings("ExitExpression")
     * @inheritDoc
     */
    public function fail(int $code): void
    {
        exit($code);
    }
}
