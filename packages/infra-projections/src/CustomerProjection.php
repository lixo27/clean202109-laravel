<?php

namespace Clean\Infra\Projections;

use Clean\Application\Customers\Contracts\CustomerFinderInterface;
use Illuminate\Support\Facades\DB;

final class CustomerProjection implements CustomerFinderInterface
{
    public function findOne(string $id): \stdClass
    {
        $query =  DB::connection('pgsql_read')
            ->table('customers')
            ->select('id', 'name');

        return $query->find($id);
    }

    public function findAll(): array
    {
        $query = DB::connection('pgsql_read')
            ->table('customers')
            ->select('id', 'name');

        return $query->get()->toArray();
    }
}
