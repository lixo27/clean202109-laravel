<?php

namespace Clean\Domain\Foundation\Contracts;

interface ValueObjectInterface
{
    public function equalsTo(ValueObjectInterface $other): bool;
}
