<?php declare(strict_types=1);

namespace Qlimix\Process\Runtime\Registry;

use Countable;
use Qlimix\Process\Runtime\Registry\Exception\NotFoundException;

interface RegistryInterface extends Countable
{
    public function add(mixed $processId, string $process): int;

    /**
     * @throws NotFoundException
     */
    public function remove(int $processId): Process;

    /**
     * @throws NotFoundException
     */
    public function get(int $registryId): Process;

    /**
     * @return Process[]
     */
    public function getAll(): array;
}
