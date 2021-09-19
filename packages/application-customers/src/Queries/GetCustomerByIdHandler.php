<?php

namespace Clean\Application\Customers\Queries;

use Clean\Application\Customers\Contracts\CustomerFinderInterface;
use Clean\Application\Customers\Contracts\GetCustomerByIdHandlerInterface;

final class GetCustomerByIdHandler implements GetCustomerByIdHandlerInterface
{
    private CustomerFinderInterface $customerFinder;

    public function __construct(CustomerFinderInterface $customerFinder)
    {
        $this->customerFinder = $customerFinder;
    }

    public function execute(GetCustomerById $query): GetCustomerByIdResponse
    {
        return GetCustomerbyIdResponse::fromArray(
            $this->customerFinder->findById($query->id)
        );
    }
}
