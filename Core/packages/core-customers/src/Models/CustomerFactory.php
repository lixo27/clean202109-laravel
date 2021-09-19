<?php

namespace Clean\Core\Customer\Models;

use Clean\Core\Contracts\IdentityFactoryInterface;
use Clean\Core\Customer\Contracts\CustomerFactoryInterface;

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
