<?php

namespace Clean\Application\Customers\Contracts;

interface CustomerFinderInterface
{
    public function findOne(string $id): \stdClass;
    public function findAll(): array;
}
