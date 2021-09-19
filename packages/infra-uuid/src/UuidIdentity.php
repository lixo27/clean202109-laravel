<?php

namespace Clean\Infra\Uuid;

use Clean\Domain\Foundation\Models\AbstractIdentity;
use Illuminate\Support\Str;
use InvalidArgumentException;

final class UuidIdentity extends AbstractIdentity
{
    public function __construct(string $value)
    {
        if (!Str::isUuid($value)) {
            throw new InvalidArgumentException('the given value is not a valid UUID');
        }

        parent::__construct($value);
    }
}
