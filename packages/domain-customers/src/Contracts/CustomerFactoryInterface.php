<?php

namespace Clean\Domain\Customers\Contracts;

use Clean\Domain\Customers\Models\Customer;

interface CustomerFactoryInterface
{
    public function create(string $name): Customer;
}
