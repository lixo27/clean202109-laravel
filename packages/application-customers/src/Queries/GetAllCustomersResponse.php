<?php

namespace Clean\Application\Customers\Queries;

final class GetAllCustomersResponse
{
    public array $customers = [];

    public static function fromArray(array $customers): GetAllCustomersResponse
    {
        $response = new self();
        $response->customers = $customers;

        return $response;
    }
}
