<?php

namespace Clean\Application\Customers\Queries;

use Clean\Application\Customers\Contracts\CustomerFinderInterface;
use Clean\Application\Customers\Contracts\GetCustomerHandlerInterface;

final class GetCustomerHandler implements GetCustomerHandlerInterface
{
    private CustomerFinderInterface $customerFinder;

    public function __construct(CustomerFinderInterface $customerFinder)
    {
        $this->customerFinder = $customerFinder;
    }

    public function execute(GetCustomer $query): GetCustomerResponse
    {
        return GetCustomerResponse::fromObject(
            $this->customerFinder->findOne($query->id)
        );
    }
}
