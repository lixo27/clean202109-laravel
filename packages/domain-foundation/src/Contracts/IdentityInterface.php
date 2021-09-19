<?php

namespace Clean\Domain\Foundation\Contracts;

interface IdentityInterface
{
    public function value(): string;
    public function equalsTo(IdentityInterface $other): bool;
}
