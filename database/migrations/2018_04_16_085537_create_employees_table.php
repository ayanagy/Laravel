<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fName')->nullable(false);
            $table->string('lName')->nullable(false);
            $table->string('image')->nullable(false);
            $table->text('job');
            $table->enum('status', ['Active', 'Not active']);
            $table->float('lat', 10, 6);
            $table->float('lng', 10, 6);	
            //$table->integer('user_id');



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
        Schema::dropIfExists('employees');
    }
}
