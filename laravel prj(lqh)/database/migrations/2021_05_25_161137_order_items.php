<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class OrderItems extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('order_id')->unsigned();
            $table->bigInteger('item_details_id')->unsigned();
            $table->integer('quantity')->nullable();
            $table->decimal('price')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign("order_id")->references("id")->on("orders");
            $table->foreign("item_details_id")->references("id")->on("item_details");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_items');
    }
}
