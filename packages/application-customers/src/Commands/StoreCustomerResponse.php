<?php

namespace Clean\Application\Customers\Commands;

use Clean\Domain\Customers\Models\Customer;

final class StoreCustomerResponse
{
    public string $id;
    public string $name;

    public static function fromEntity(Customer $customer): StoreCustomerResponse
    {
        $response = new self();
        $response->id = $customer->getIdentity()->value();
        $response->name = $customer->getName()->getFullName();

        return $response;
    }
}
