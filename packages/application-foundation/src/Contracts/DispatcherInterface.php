<?php

namespace Clean\Application\Foundation\Contracts;

interface DispatcherInterface
{
    public function dispatch(EventInterface $event);
}
