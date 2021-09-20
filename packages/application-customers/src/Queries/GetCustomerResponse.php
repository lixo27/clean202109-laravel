<?php

namespace Clean\Application\Customers\Queries;

final class GetCustomerResponse
{
    public \stdClass $customer;

    public static function fromObject(\stdClass $customer): GetCustomerResponse
    {
        $response = new self();
        $response->customer = $customer;

        return $response;
    }
}
