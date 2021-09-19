<?php

namespace Clean\Laravel\Interfaces\Http\Controllers\Customers;

use App\Http\Controllers\Controller;

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
