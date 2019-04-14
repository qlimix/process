<?php declare(strict_types=1);

namespace Qlimix\Process\Registry;

use Countable;
use Qlimix\Process\ProcessInterface;

interface RegistryInterface extends Countable
{
    public function remove(int $processId): int;

    public function has(int $registryId): bool;

    /**
     * @param mixed $registryId
     */
    public function add($registryId, ProcessInterface $process): int;

    public function get(int $registryId): RegisteredProcess;

    /**
     * @return RegisteredProcess[]
     */
    public function getAll(): array;
}
