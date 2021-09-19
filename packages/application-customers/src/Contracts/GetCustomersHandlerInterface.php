<?php

namespace Clean\Application\Customers\Contracts;

use Clean\Application\Customers\Queries\GetCustomers;
use Clean\Application\Customers\Queries\GetCustomersResponse;

interface GetCustomersHandlerInterface
{
    public function execute(GetCustomers $query): GetCustomersResponse;
}
