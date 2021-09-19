<?php

namespace Clean\Domain\Foundation\Contracts;

interface RepositoryInterface
{
    public function ofIdentity(IdentityInterface $identity): EntityInterface;
}
