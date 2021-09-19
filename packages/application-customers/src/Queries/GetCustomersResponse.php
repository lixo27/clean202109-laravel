<?php

namespace Clean\Application\Customers\Queries;

final class GetCustomersResponse
{
    public array $customers = [];

    public static function fromArray(array $customers): GetCustomersResponse
    {
        $response = new self();
        $response->customers = $customers;

        return $response;
    }
}
