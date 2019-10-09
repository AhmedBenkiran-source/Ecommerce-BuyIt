<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('NameProduct',20);
            $table->integer('Brand')->unsigned();
            $table->foreign('Brand')->references('id')->on('brand')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('Category')->unsigned();
            $table->foreign('Category')->references('id')->on('categories')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('Provider')->unsigned();
            $table->foreign('Provider')->references('id')->on('providers')->onDelete('cascade')->onUpdate('cascade');
            
            $table->decimal('PriceProduct');
            $table->integer('QuantityProduct');
            $table->string('DesignationProduct');
            $table->string('DescriptionProduct');
            $table->string('ImageProduct',60);


            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
       
    }
}
