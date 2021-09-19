<?php

namespace Clean\Core\Models;

use Clean\Core\Contracts\IdentityInterface;

abstract class AbstractIdentity implements IdentityInterface
{
    protected string $value;

    protected function __construct(string $value)
    {
        $this->value = $value;
    }

    public function value(): string
    {
        return $this->value;
    }

    public function equalsTo(IdentityInterface $other): bool
    {
        return get_class($this) === get_class($other)
            && $this->value === $other->value;
    }
}
