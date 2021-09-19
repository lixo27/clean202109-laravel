<?php

namespace Clean\Domain\Customers\Models;

use Clean\Domain\Foundation\Contracts\IdentityInterface;
use Clean\Domain\Foundation\Models\AbstractEntity;

class Customer extends AbstractEntity
{
    private Name $name;

    public function __construct(IdentityInterface $identity, Name $name)
    {
        parent::__construct($identity);
        $this->name = $name;
    }

    public function getName(): Name
    {
        return $this->name;
    }
}
