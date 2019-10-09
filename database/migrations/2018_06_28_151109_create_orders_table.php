<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Status',20);
            $table->string('ContactName',20);

            $table->string('Country');
            $table->string('City');
            $table->string('Addrese');
            $table->string('Postal');
            
            $table->string('PhoneNumber',20);
            $table->string('CardNumber',20);
            $table->string('SecurtyCode',20);
            $table->string('CardholderName',20);
            $table->integer('user');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
