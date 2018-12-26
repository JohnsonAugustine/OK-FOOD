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
            $table->string('delivery_address')->nullable();
            $table->decimal('delivery_cost', 8, 2)->nullable();
            $table->decimal('total', 8, 2)->nullable();
            $table->decimal('amount_paid', 8, 2)->nullable();
            $table->decimal('change', 8, 2)->nullable();
            $table->integer('status');
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
