<?php

namespace Clean\Core\Customer\Contracts;

use Clean\Core\Customer\Models\Customer;

interface CustomerFactoryInterface
{
    public function create(string $name): Customer;
}
