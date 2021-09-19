<?php

namespace Clean\Application\Customers\Contracts;

use Clean\Application\Customers\Queries\GetAllCustomers;
use Clean\Application\Customers\Queries\GetAllCustomersResponse;

interface GetAllCustomersHandlerInterface
{
    public function execute(GetAllCustomers $query): GetAllCustomersResponse;
}
