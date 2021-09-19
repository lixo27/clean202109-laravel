<?php

namespace Clean\Domain\Foundation\Models;

use Clean\Domain\Foundation\Contracts\EntityInterface;
use Clean\Domain\Foundation\Contracts\IdentityInterface;

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
