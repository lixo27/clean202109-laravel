<?php

namespace Clean\Domain\Foundation\Contracts;

interface EntityInterface
{
    public function getIdentity(): IdentityInterface;
}
