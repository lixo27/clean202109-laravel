<?php

namespace Clean\Application\Customers\Contracts;

interface CustomerFinderInterface
{
    public function findById(string $id): array;
    public function findAll(): array;
}
