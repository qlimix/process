<?php declare(strict_types=1);

namespace Qlimix\Queue\Consumer\Runtime;

interface ControlInterface
{
    public function tick(): void;

    public function abort(): bool;

    public function init(): void;
}
