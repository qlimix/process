<?php declare(strict_types=1);

namespace Qlimix\Process\Output;

use const PHP_EOL;

final class StdOutput implements OutputInterface
{
    /**
     * @inheritDoc
     */
    public function write(string $text): void
    {
        echo $text;
    }

    /**
     * @inheritDoc
     */
    public function writeLine(string $text): void
    {
        echo $text.PHP_EOL;
    }
}
