<?php

namespace Clean\Interfaces\Api\Http\Controllers\Customers;

use Clean\Application\Customers\Contracts\GetCustomersHandlerInterface;
use Clean\Application\Customers\Queries\GetCustomers;
use Clean\Interfaces\Api\Http\Controllers\Controller;

class GetCustomersController extends Controller
{
    private GetCustomersHandlerInterface $getCustomersHandler;

    public function __construct(GetCustomersHandlerInterface $getCustomersHandler)
    {
        $this->getCustomersHandler = $getCustomersHandler;
    }

    public function __invoke()
    {
        $query = new GetCustomers();
        $response = $this->getCustomersHandler->execute($query);

        return response()->json([
            'status' => 'success',
            'data' => $response,
        ]);
    }
}
