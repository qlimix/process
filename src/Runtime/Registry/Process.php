<?php declare(strict_types=1);

namespace Qlimix\Process\Runtime\Registry;

final readonly class Process
{
    public function __construct(
        public int $registryId,
        public mixed $processId,
        public string $process
    ) {
    }
}
