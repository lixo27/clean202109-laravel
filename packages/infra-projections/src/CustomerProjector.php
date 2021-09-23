<?php

namespace Clean\Infra\Projections;

use Clean\Application\Customers\Events\StoredCustomer;
use Illuminate\Support\Facades\DB;

final class CustomerProjector
{
    public function handle(StoredCustomer $event)
    {
        DB::connection('pgsql_read')->table('customers')->insert([
            'id' => $event->id,
            'name' => $event->name,
        ]);
    }
}
