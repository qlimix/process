<?php declare(strict_types=1);

namespace Qlimix\Process\Output;

interface OutputInterface
{
    public function write(string $text): void;
}
