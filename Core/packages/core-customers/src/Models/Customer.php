<?php

namespace Clean\Core\Customer\Models;

use Clean\Core\Contracts\EntityInterface;
use Clean\Core\Contracts\IdentityInterface;

class Customer implements EntityInterface
{
    private IdentityInterface $identity;
    private Name $name;

    public function __construct(IdentityInterface $identity, Name $name)
    {
        $this->identity = $identity;
        $this->name = $name;
    }

    public function getIdentity(): IdentityInterface
    {
        return $this->identity;
    }

    public function getName(): Name
    {
        return $this->name;
    }
}
