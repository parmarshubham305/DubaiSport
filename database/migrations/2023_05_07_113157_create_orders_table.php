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
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->longText('products');
            $table->enum('status', ['In Process', 'Shipped', 'Delivered'])->default('In Process');
            $table->enum('delivery_type', ['Delivery', 'Pickup'])->nullable();
            $table->string('shipping_note')->nullable();
            $table->string('discount')->nullable();
            $table->double('vat', [5,2])->default(0);
            $table->string('delivery_charge',[10,2])->default(0);
            $table->string('address')->nullable();
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
