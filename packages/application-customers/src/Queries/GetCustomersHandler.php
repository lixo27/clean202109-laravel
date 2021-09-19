<?php

namespace Clean\Application\Customers\Queries;

use Clean\Application\Customers\Contracts\CustomerFinderInterface;
use Clean\Application\Customers\Contracts\GetCustomersHandlerInterface;

final class GetCustomersHandler implements GetCustomersHandlerInterface
{
    private CustomerFinderInterface $customerFinder;

    public function __construct(CustomerFinderInterface $customerFinder)
    {
        $this->customerFinder = $customerFinder;
    }

    public function execute(GetCustomers $query): GetCustomersResponse
    {
        return GetCustomersResponse::fromArray(
            $this->customerFinder->findAll()
        );
    }
}
