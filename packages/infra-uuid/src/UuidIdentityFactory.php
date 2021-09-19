<?php

namespace Clean\Infra\Uuid;

use Clean\Domain\Foundation\Contracts\IdentityFactoryInterface;
use Clean\Domain\Foundation\Contracts\IdentityInterface;
use Illuminate\Support\Str;

final class UuidIdentityFactory implements IdentityFactoryInterface
{
    public function create(): IdentityInterface
    {
        return new UuidIdentity(Str::uuid());
    }

    public function valueOf(string $value): IdentityInterface
    {
        return new UuidIdentity($value);
    }
}
