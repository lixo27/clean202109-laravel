<?php

namespace Clean\Domain\Customers\Models;

use Clean\Domain\Customers\Contracts\CustomerFactoryInterface;
use Clean\Domain\Foundation\Contracts\IdentityFactoryInterface;

class CustomerFactory implements CustomerFactoryInterface
{
    private IdentityFactoryInterface $identityFactory;

    public function __construct(IdentityFactoryInterface $identityFactory)
    {
        $this->identityFactory = $identityFactory;
    }

    public function create(string $name): Customer
    {
        $identity = $this->identityFactory->create();
        return new Customer($identity, new Name($name));
    }
}
