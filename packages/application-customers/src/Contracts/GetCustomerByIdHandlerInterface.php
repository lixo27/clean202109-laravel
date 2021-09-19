<?php

namespace Clean\Application\Customers\Contracts;

use Clean\Application\Customers\Queries\GetCustomerById;
use Clean\Application\Customers\Queries\GetCustomerByIdResponse;

interface GetCustomerByIdHandlerInterface
{
    public function execute(GetCustomerById $query): GetCustomerByIdResponse;
}
