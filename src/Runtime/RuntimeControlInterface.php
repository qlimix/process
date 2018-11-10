<?php declare(strict_types=1);

namespace Qlimix\Process\Runtime;

interface RuntimeControlInterface
{
    public function tick(): void;

    public function abort(): bool;
}
