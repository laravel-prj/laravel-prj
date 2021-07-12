<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Customers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('address',255)->nullable();
            $table->datetime('birthday')->nullable();
            $table->integer('gender')->nullable();
            $table->string('tel',10)->nullable();
            $table->string('city',255)->nullable();
            $table->string('email')->unique();
            $table->string('password');
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
        Schema::dropIfExists('customers');
    }
}
