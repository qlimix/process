<?php declare(strict_types=1);

namespace Qlimix\Process\Registry;

use Countable;
use Qlimix\Process\ProcessInterface;
use Qlimix\Process\Registry\Exception\NotFoundException;

interface RegistryInterface extends Countable
{
    /**
     * @throws NotFoundException
     */
    public function remove(int $processId): int;

    public function has(int $registryId): bool;

    /**
     * @param mixed $registryId
     */
    public function add($registryId, ProcessInterface $process): int;

    /**
     * @throws NotFoundException
     */
    public function get(int $registryId): RegisteredProcess;

    /**
     * @return RegisteredProcess[]
     */
    public function getAll(): array;
}
