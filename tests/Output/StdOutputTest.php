<?php declare(strict_types=1);

namespace Qlimix\Tests\Process\Output;

use PHPUnit\Framework\TestCase;
use Qlimix\Process\Output\StdOutput;

final class StdOutputTest extends TestCase
{
    private StdOutput $output;

    protected function setUp(): void
    {
        $this->output = new StdOutput();
    }

    public function testShouldWrite(): void
    {
        $output = 'foo';
        ob_start();
        $this->output->write($output);
        $writtenOutput = ob_get_contents();
        ob_end_clean();
        $this->assertSame($output, $writtenOutput);
    }

    public function testShouldWriteLine(): void
    {
        $output = 'foo';
        ob_start();
        $this->output->writeLine($output);
        $writtenOutput = ob_get_contents();
        ob_end_clean();
        $this->assertSame($output.PHP_EOL, $writtenOutput);
    }
}
