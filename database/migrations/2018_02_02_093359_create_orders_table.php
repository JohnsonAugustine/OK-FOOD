<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->integer('restaurant_id');
            $table->integer('customer_id');
            $table->decimal('sub_total', 8, 2)->nullable();
            $table->decimal('tax', 8, 2)->nullable();
            $table->decimal('delivery_cost', 8, 2)->nullable();
            $table->string('voucher_code')->nullable();
            $table->decimal('voucher_ammount', 8, 2)->nullable();
            $table->decimal('total', 8, 2)->nullable();
            $table->decimal('net_income', 8, 2)->nullable();
            $table->string('delivery_address')->nullable();
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
