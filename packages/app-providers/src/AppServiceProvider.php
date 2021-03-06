<?php

namespace Clean\App\Providers;

use Clean\Application\Customers\Commands\StoreCustomerHandler;
use Clean\Application\Customers\Contracts\CustomerFinderInterface;
use Clean\Application\Customers\Contracts\GetCustomerHandlerInterface;
use Clean\Application\Customers\Contracts\GetCustomersHandlerInterface;
use Clean\Application\Customers\Contracts\StoreCustomerHandlerInterface;
use Clean\Application\Customers\Queries\GetCustomerHandler;
use Clean\Application\Customers\Queries\GetCustomersHandler;
use Clean\Application\Foundation\Contracts\DispatcherInterface;
use Clean\Domain\Customers\Contracts\CustomerFactoryInterface;
use Clean\Domain\Customers\Contracts\CustomerRepositoryInterface;
use Clean\Domain\Customers\Models\CustomerFactory;
use Clean\Domain\Foundation\Contracts\IdentityFactoryInterface;
use Clean\Infra\Data\Repositories\CustomerRepository;
use Clean\Infra\Events\ApplicationDispatcher;
use Clean\Infra\Projections\CustomerProjection;
use Clean\Infra\Uuid\UuidIdentityFactory;
use Illuminate\Support\ServiceProvider;

final class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadMigrationsFrom(dirname(__DIR__, 2) . '/infra-data/src/Migrations');
        $this->loadMigrationsFrom(dirname(__DIR__, 2) . '/infra-projections/src/Migrations');

        call_user_func(function () {
            // application-*
            $this->app->bind(GetCustomerHandlerInterface::class, GetCustomerHandler::class);
            $this->app->bind(GetCustomersHandlerInterface::class, GetCustomersHandler::class);
            $this->app->bind(StoreCustomerHandlerInterface::class, StoreCustomerHandler::class);
        });

        call_user_func(function () {
            // domain-*
            $this->app->bind(CustomerFactoryInterface::class, CustomerFactory::class);
        });

        call_user_func(function () {
            // infra-*
            $this->app->bind(CustomerRepositoryInterface::class, CustomerRepository::class);
            $this->app->bind(DispatcherInterface::class, ApplicationDispatcher::class);
            $this->app->bind(CustomerFinderInterface::class, CustomerProjection::class);
            $this->app->bind(IdentityFactoryInterface::class, UuidIdentityFactory::class);
        });
    }
}
