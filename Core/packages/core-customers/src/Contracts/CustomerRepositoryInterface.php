<?php

namespace Clean\Core\Customer\Contracts;

use Clean\Core\Contracts\RepositoryInterface;
use Clean\Core\Customer\Models\Customer;

interface CustomerRepositoryInterface extends RepositoryInterface
{
    public function add(Customer $customer): void;
    public function merge(Customer $customer): void;
    public function remove(Customer $customer): void;
}
