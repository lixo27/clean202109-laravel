<?php

namespace Clean\Application\Customers\Contracts;

interface CustomerFinderInterface
{
    public function findOne(string $id): array;
    public function findAll(): array;
}
