<?php

namespace Clean\Domain\Customers\Models;

use Clean\Domain\Foundation\Contracts\ValueObjectInterface;

class Name implements ValueObjectInterface
{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getFullName()
    {
        return $this->name;
    }

    public function equalsTo(ValueObjectInterface $other): bool
    {
        return get_class($this) === get_class($other)
            && $this->name === $other->name;
    }
}
