<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersReadTable extends Migration
{
    public function up()
    {
        Schema::connection('pgsql_read')
            ->create('customers', function (Blueprint $table) {
                $table->uuid('id');
                $table->string('name', 50);
            });
    }

    public function down()
    {
        Schema::connection('pgsql_read')
            ->dropIfExists('customers');
    }
}
