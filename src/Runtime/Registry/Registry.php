<?php declare(strict_types=1);

namespace Qlimix\Process\Runtime\Registry;

use Qlimix\Process\Runtime\Registry\Exception\NotFoundException;
use function count;

final class Registry implements RegistryInterface
{
    /** @var Process[] */
    private array $processes = [];

    private int $id = 0;

    /**
     * @inheritDoc
     */
    public function count(): int
    {
        return count($this->processes);
    }

    /**
     * @inheritDoc
     */
    public function remove(int $processId): Process
    {
        foreach ($this->processes as $index => $process) {
            if ($process->getProcessId() === $processId) {
                unset($this->processes[$index]);

                return $process;
            }
        }

        throw new NotFoundException('Couldn\'t remove process by id');
    }

    /**
     * @inheritDoc
     */
    public function add($processId, string $process): int
    {
        $this->id++;
        $this->processes[] = new Process($this->id, $processId, $process);

        return $this->id;
    }

    /**
     * @inheritDoc
     */
    public function get(int $registryId): Process
    {
        foreach ($this->processes as $process) {
            if ($process->getRegistryId() === $registryId) {
                return $process;
            }
        }

        throw new NotFoundException('Couldn\'t get process by id');
    }

    /**
     * @inheritDoc
     */
    public function getAll(): array
    {
        return $this->processes;
    }
}
