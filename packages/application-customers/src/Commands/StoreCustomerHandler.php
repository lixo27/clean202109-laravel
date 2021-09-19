<?php

namespace Clean\Application\Customers\Contracts;

use Clean\Application\Customers\Commands\StoreCustomer;
use Clean\Application\Customers\Commands\StoreCustomerResponse;
use Clean\Application\Customers\Events\StoredCustomer;
use Clean\Application\Foundation\Contracts\DispatcherInterface;
use Clean\Domain\Customers\Contracts\CustomerFactoryInterface;
use Clean\Domain\Customers\Contracts\CustomerRepositoryInterface;

final class StoreCustomerHandler implements StoreCustomerHandlerInterface
{
    private CustomerFactoryInterface $customerFactory;
    private CustomerRepositoryInterface $customerRepository;
    private DispatcherInterface $dispatcher;

    public function __construct(
        CustomerFactoryInterface $customerFactory,
        CustomerRepositoryInterface $customerRepository,
        DispatcherInterface $dispatcher
    ) {
        $this->customerFactory = $customerFactory;
        $this->customerRepository = $customerRepository;
        $this->dispatcher = $dispatcher;
    }

    public function execute(StoreCustomer $command): StoreCustomerResponse
    {
        $customer = $this->customerFactory->create($command->name);
        $this->customerRepository->add($customer);

        $this->dispatcher->dispatch(
            StoredCustomer::fromEntity($customer)
        );

        return StoreCustomerResponse::fromEntity($customer);
    }
}
