<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Orders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('customer_id')->unsigned();
            $table->datetime('order_date')->nullable();
            $table->string('Address',255)->nullable();
            $table->string('delivery_time',255)->nullable();
            $table->string('email')->unique();
            $table->decimal('total_price');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign("customer_id")->references("id")->on("customers");
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
