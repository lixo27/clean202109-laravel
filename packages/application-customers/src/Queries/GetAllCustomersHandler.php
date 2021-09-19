<?php

namespace Clean\Application\Customers\Queries;

use Clean\Application\Customers\Contracts\CustomerFinderInterface;
use Clean\Application\Customers\Contracts\GetAllCustomersHandlerInterface;

final class GetAllCustomersHandler implements GetAllCustomersHandlerInterface
{
    private CustomerFinderInterface $customerFinder;

    public function __construct(CustomerFinderInterface $customerFinder)
    {
        $this->customerFinder = $customerFinder;
    }

    public function execute(GetAllCustomers $query): GetAllCustomersResponse
    {
        return GetAllCustomersResponse::fromArray(
            $this->customerFinder->findAll()
        );
    }
}
