<?php

namespace Clean\Application\Customers\Contracts;

use Clean\Application\Customers\Queries\GetCustomer;
use Clean\Application\Customers\Queries\GetCustomerResponse;

interface GetCustomerHandlerInterface
{
    public function execute(GetCustomer $query): GetCustomerResponse;
}
