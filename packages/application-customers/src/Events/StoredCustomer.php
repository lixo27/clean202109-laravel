<?php

namespace Clean\Application\Customers\Events;

use Clean\Application\Foundation\Contracts\EventInterface;
use Clean\Domain\Customers\Models\Customer;

class StoredCustomer implements EventInterface
{
    public string $id;
    public string $name;

    public static function fromEntity(Customer $customer): StoredCustomer
    {
        $event = new self();
        $event->id = $customer->getIdentity()->value();
        $event->name = $customer->getName()->getFullName();

        return $event;
    }
}
