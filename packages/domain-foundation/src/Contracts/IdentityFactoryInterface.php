<?php

namespace Clean\Domain\Foundation\Contracts;

interface IdentityFactoryInterface
{
    public function create(): IdentityInterface;
    public function valueOf(string $value): IdentityInterface;
}
