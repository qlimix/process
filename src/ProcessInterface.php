<?php declare(strict_types=1);

namespace Qlimix\Process;

use Qlimix\Process\Exception\ProcessException;
use Qlimix\Process\Output\OutputInterface;
use Qlimix\Queue\Consumer\Runtime\ControlInterface;

interface ProcessInterface
{
    /**
     * @param ControlInterface $control
     * @param OutputInterface $output
     *
     * @throws ProcessException
     */
    public function run(ControlInterface $control, OutputInterface $output): void;
}
