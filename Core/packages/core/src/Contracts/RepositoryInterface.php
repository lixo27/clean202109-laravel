<?php

namespace Clean\Core\Contracts;

interface RepositoryInterface
{
    public function ofIdentity(IdentityInterface $identity): EntityInterface;
}
