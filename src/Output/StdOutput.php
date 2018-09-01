<?php declare(strict_types=1);

namespace Qlimix\Process\Output;

final class StdOutput implements OutputInterface
{
    /**
     * @inheritDoc
     */
    public function write(string $text): void
    {
        echo $text.PHP_EOL;
    }
}
