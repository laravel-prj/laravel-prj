<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Shops extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shops', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned();
            $table->string('name',255)->nullable();
            $table->string('city',255)->nullable();
            $table->string('address',255)->nullable();
            $table->string('tel',10)->nullable();
            $table->string('email',255)->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign("user_id")->references("id")->on("users");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shops');
    }
}
