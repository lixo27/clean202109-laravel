<?php

namespace Clean\Core\Customer\Models;

use Clean\Core\Contracts\ValueObjectInterface;

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
