<?php

namespace Clean\Infra\Data\Models;

use Clean\Domain\Customers\Models\Customer;

final class CustomerModel extends AbstractModel
{
    protected $table = 'customers';

    public static function fromEntity(Customer $customer): CustomerModel
    {
        $customerModel = new self();
        $customerModel->id = $customer->getIdentity()->value();
        $customerModel->name = $customer->getName()->getFullName();

        return $customerModel;
    }
}
