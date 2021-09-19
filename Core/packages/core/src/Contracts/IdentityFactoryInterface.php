<?php

namespace Clean\Core\Contracts;

interface IdentityFactoryInterface
{
    public function create(): IdentityInterface;
    public function valueOf(string $value): IdentityInterface;
}
