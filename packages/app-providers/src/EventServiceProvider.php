<?php

namespace Clean\App\Providers;

use Clean\Application\Customers\Events\StoredCustomer;
use Clean\Infra\Projections\CustomerProjector;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Event::listen(
            StoredCustomer::class,
            [CustomerProjector::class, 'handle']
        );
    }
}
