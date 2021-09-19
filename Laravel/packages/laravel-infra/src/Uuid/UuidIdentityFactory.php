<?php

namespace Clean\Laravel\Infra\Uuid;

use Clean\Core\Contracts\IdentityFactoryInterface;
use Clean\Core\Contracts\IdentityInterface;
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
