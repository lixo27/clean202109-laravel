<?php

namespace Clean\Infra\Projections;

use Clean\Application\Customers\Contracts\CustomerFinderInterface;
use Illuminate\Support\Facades\DB;

final class CustomerFinder implements CustomerFinderInterface
{
    public function findOne(string $id): array
    {
        $customer = DB::table('customers')->select('id', 'name')->find($id);

        return [$customer];
    }

    public function findAll(): array
    {
        $customers = DB::table('customers')->select('id', 'name')->get();

        return $customers->toArray();
    }
}
