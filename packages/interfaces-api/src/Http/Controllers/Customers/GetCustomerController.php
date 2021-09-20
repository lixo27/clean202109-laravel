<?php

namespace Clean\Interfaces\Api\Http\Controllers\Customers;

use Clean\Application\Customers\Contracts\GetCustomerHandlerInterface;
use Clean\Application\Customers\Queries\GetCustomer;
use Clean\Interfaces\Api\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GetCustomerController extends Controller
{
    private GetCustomerHandlerInterface $getCustomerHandler;

    public function __construct(GetCustomerHandlerInterface $getCustomerHandler)
    {
        $this->getCustomerHandler = $getCustomerHandler;
    }

    public function __invoke(Request $request)
    {
        $query = new GetCustomer();
        $query->id = $request->route('id');

        $response = $this->getCustomerHandler->execute($query);

        return response()->json([
            'status' => 'success',
            'data' => $response,
        ]);
    }
}
