<?php

namespace Clean\Core\Customer\Models;

use Clean\Core\Contracts\EntityInterface;
use Clean\Core\Contracts\IdentityInterface;

class Customer implements EntityInterface
{
    private IdentityInterface $identity;
    private string $name;

    public function __construct(IdentityInterface $identity, string $name)
    {
        $this->identity = $identity;
        $this->name = $name;
    }

    public function getIdentity(): IdentityInterface
    {
        return $this->identity;
    }

    public function getName(): string
    {
        return $this->name;
    }
}
