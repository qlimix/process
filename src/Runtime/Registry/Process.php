<?php declare(strict_types=1);

namespace Qlimix\Process\Runtime\Registry;

final class Process
{
    private int $registryId;

    /** @var mixed */
    private $processId;

    private string $process;

    /**
     * @param mixed $processId
     */
    public function __construct(int $registryId, $processId, string $process)
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

    public function getProcess(): string
    {
        return $this->process;
    }
}
