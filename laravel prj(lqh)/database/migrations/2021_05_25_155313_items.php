<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Items extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('item_type_id')->unsigned();
            $table->bigInteger('shop_id')->unsigned();
            $table->string('name',255)->nullable();
            $table->string('image',255)->nullable();
            $table->string('description',255)->nullable();
            $table->decimal('price')->nullable();
            $table->integer('feature')->nullable();
            $table->decimal('discout_item')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign("item_type_id")->references("id")->on("item_types");
            $table->foreign("shop_id")->references("id")->on("shops");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('items');
    }
}
