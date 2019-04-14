<?php declare(strict_types=1);

namespace Qlimix\Process\Registry;

use Qlimix\Process\ProcessInterface;

final class RegisteredProcess
{
    /** @var int */
    private $registryId;

    /** @var mixed */
    private $processId;

    /** @var ProcessInterface */
    private $process;

    /**
     * @param mixed $processId
     */
    public function __construct(int $registryId, $processId, ProcessInterface $process)
    {
        $this->registryId = $registryId;
        $this->processId = $processId;
        $this->process = $process;
    }

    public function getRegistryId(): int
    {
        return $this->registryId;
    }

    /**
     * @return mixed
     */
    public function getProcessId()
    {
        return $this->processId;
    }

    public function getProcess(): ProcessInterface
    {
        return $this->process;
    }
}
