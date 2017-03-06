<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembranesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('membranes', function (Blueprint $table) {
            $table->increments('id');
	        $table->string('role');
	        $table->string('account_email');

	        $table->string('first_name');
	        $table->string('last_name');
	        $table->string('gender');
	        $table->string('address');

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
        Schema::drop('membranes');
    }
}
