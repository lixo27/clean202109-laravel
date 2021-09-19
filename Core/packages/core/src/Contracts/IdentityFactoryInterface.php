<?php

namespace Clean\Core\Contracts;

interface IdentityFactoryInterface
{
    public function of(string $value): IdentityInterface;
    public function next(): IdentityInterface;
}
