<?php

namespace Clean\Application\Customers\Queries;

final class GetCustomerResponse
{
    public array $customers = [];

    public static function fromArray(array $customers): GetCustomerResponse
    {
        $response = new self();
        $response->customers = $customers;

        return $response;
    }
}
