<?php declare(strict_types=1);

namespace Qlimix\Process;

use Qlimix\Process\Exception\ProcessException;
use Qlimix\Process\Output\OutputInterface;
use Qlimix\Process\Runtime\RuntimeControlInterface;

interface ProcessInterface
{
    /**
     * @param RuntimeControlInterface $control
     * @param OutputInterface $output
     *
     * @throws ProcessException
     */
    public function run(RuntimeControlInterface $control, OutputInterface $output): void;
}
