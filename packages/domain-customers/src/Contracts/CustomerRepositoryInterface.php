<?php

namespace Clean\Domain\Customers\Contracts;

use Clean\Domain\Customers\Models\Customer;
use Clean\Domain\Foundation\Contracts\RepositoryInterface;

interface CustomerRepositoryInterface extends RepositoryInterface
{
    public function add(Customer $customer): void;
    public function merge(Customer $customer): void;
    public function remove(Customer $customer): void;
}
