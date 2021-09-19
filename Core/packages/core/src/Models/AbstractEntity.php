<?php

namespace Clean\Core\Models;

use Clean\Core\Contracts\EntityInterface;
use Clean\Core\Contracts\IdentityInterface;

abstract class AbstractEntity implements EntityInterface
{
    protected IdentityInterface $identity;

    protected function __construct(IdentityInterface $identity)
    {
        $this->identity = $identity;
    }

    public function getIdentity(): IdentityInterface
    {
        return $this->identity;
    }
}
