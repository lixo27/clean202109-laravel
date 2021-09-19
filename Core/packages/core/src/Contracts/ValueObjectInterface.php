<?php

namespace Clean\Core\Contracts;

interface ValueObjectInterface
{
    public function equalsTo(ValueObjectInterface $other): bool;
}
