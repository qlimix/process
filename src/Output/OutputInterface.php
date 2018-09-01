<?php declare(strict_types=1);

namespace Qlimix\Process\Output;

interface OutputInterface
{
    /**
     * @param string $text
     */
    public function write(string $text): void;
}
