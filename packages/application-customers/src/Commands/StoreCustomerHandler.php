<?php

namespace Clean\Application\Customers\Contracts;

use Clean\Application\Customers\Commands\StoreCustomer;
use Clean\Application\Customers\Commands\StoreCustomerResponse;
use Clean\Domain\Customers\Contracts\CustomerFactoryInterface;
use Clean\Domain\Customers\Contracts\CustomerRepositoryInterface;

final class StoreCustomerHandler implements StoreCustomerHandlerInterface
{
    private CustomerFactoryInterface $customerFactory;
    private CustomerRepositoryInterface $customerRepository;

    public function __construct(
        CustomerFactoryInterface $customerFactory,
        CustomerRepositoryInterface $customerRepository
    ) {
        $this->customerFactory = $customerFactory;
        $this->customerRepository = $customerRepository;
    }

    public function execute(StoreCustomer $command): StoreCustomerResponse
    {
        $customer = $this->customerFactory->create($command->name);
        $this->customerRepository->add($customer);

        return StoreCustomerResponse::fromEntity($customer);
    }
}
