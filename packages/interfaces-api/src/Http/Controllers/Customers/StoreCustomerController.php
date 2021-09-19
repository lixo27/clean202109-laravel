<?php

namespace Clean\Interfaces\Api\Http\Controllers\Customers;

use Clean\Application\Customers\Commands\StoreCustomer;
use Clean\Application\Customers\Contracts\StoreCustomerHandlerInterface;
use Clean\Interfaces\Api\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StoreCustomerController extends Controller
{
    private StoreCustomerHandlerInterface $storeCustomerHandler;

    public function __construct(StoreCustomerHandlerInterface $storeCustomerHandler)
    {
        $this->storeCustomerHandler = $storeCustomerHandler;
    }

    public function __invoke(Request $request)
    {
        $command = new StoreCustomer();
        $command->name = $request->get('name');

        $response = $this->storeCustomerHandler->execute($command);

        return response()->json([
            'status' => 'success',
            'data' => $response,
        ]);
    }
}
