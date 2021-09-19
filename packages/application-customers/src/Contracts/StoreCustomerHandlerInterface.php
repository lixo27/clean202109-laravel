<?php

namespace Clean\Application\Customers\Contracts;

use Clean\Application\Customers\Commands\StoreCustomer;
use Clean\Application\Customers\Commands\StoreCustomerResponse;

interface StoreCustomerHandlerInterface
{
    public function execute(StoreCustomer $command): StoreCustomerResponse;
}
