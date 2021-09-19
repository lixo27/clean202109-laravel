<?php

namespace Clean\Application\Customers\Queries;

final class GetCustomerByIdResponse
{
    public array $customers = [];

    public static function fromArray(array $customers): GetCustomerByIdResponse
    {
        $response = new self();
        $response->customers = $customers;

        return $response;
    }
}
