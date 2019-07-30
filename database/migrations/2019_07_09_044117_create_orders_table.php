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
            
            $table->integer('product_id');
            $table->string('product_name');
            $table->integer('qty');
            $table->string('trx_id');
            
            $table->string('customer_name');
            $table->string('phone');
            $table->string('email');

            $table->string('country');
            $table->string('city');
            $table->integer('zip_code');
            $table->string('address_line');
            

            $table->string('payment_status');
            

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
