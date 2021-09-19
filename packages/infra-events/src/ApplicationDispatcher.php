<?php

namespace Clean\Infra\Events;

use Clean\Application\Foundation\Contracts\DispatcherInterface;
use Clean\Application\Foundation\Contracts\EventInterface;

final class ApplicationDispatcher implements DispatcherInterface
{
    public function dispatch(EventInterface $event)
    {
        event($event);
    }
}
