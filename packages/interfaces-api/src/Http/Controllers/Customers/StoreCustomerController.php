<?php

namespace Clean\Interfaces\Api\Http\Controllers\Customers;

use Clean\Interfaces\Api\Http\Controllers\Controller;

class StoreCustomerController extends Controller
{
    public function __invoke()
    {
        return response()->json([
            'status' => 'success',
            'data' => [],
        ]);
    }
}
