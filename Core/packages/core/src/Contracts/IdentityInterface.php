<?php

namespace Clean\Core\Contracts;

interface IdentityInterface
{
    public function value(): string;
    public function equalsTo(IdentityInterface $identity): bool;
}
