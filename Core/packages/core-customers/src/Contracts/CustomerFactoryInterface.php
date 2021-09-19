<?php

namespace Clean\Core\Customers\Contracts;

use Clean\Core\Customers\Models\Customer;

interface CustomerFactoryInterface
{
    public function create(string $name): Customer;
}
