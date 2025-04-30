<?php declare(strict_types=1);

namespace Qlimix\Process\Control;

final readonly class Status
{
    public function __construct(
        public int $id,
        public string $process,
        public bool $success
    ) {
    }
}
