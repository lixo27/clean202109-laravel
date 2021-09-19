<?php

namespace Clean\Core\Customer\Models;

use Clean\Core\Contracts\IdentityInterface;
use Clean\Core\Models\AbstractEntity;

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
