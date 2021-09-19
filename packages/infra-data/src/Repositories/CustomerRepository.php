<?php

namespace Clean\Infra\Data\Repositories;

use Clean\Domain\Customers\Contracts\CustomerRepositoryInterface;
use Clean\Domain\Customers\Models\Customer;
use Clean\Domain\Customers\Models\Name;
use Clean\Domain\Foundation\Contracts\IdentityInterface;
use Clean\Domain\Foundation\Contracts\EntityInterface;
use Clean\Domain\Foundation\Contracts\IdentityFactoryInterface;
use Clean\Infra\Data\Models\CustomerModel;

final class CustomerRepository implements CustomerRepositoryInterface
{
    private IdentityFactoryInterface $identityFactory;

    public function __construct(IdentityFactoryInterface $identityFactory)
    {
        $this->identityFactory = $identityFactory;
    }

    public function ofIdentity(IdentityInterface $identity): EntityInterface
    {
        $customerModel = CustomerModel::findOrFail($identity->value());

        return new Customer(
            $this->identityFactory->valueOf($customerModel->id),
            new Name($customerModel->name)
        );
    }

    public function add(Customer $customer): void
    {
        $customerModel = CustomerModel::fromEntity($customer);
        $customerModel->save();
    }
}
