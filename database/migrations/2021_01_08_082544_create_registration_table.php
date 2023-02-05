<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reg', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('dob', 40);
            $table->string('email', 100);
            $table->string('profile',200);
            $table->string('aadhar',100);
            $table->string('mob',40);
            $table->string('father',100);
            $table->string('gen',40);
            $table->string('newid',100);
            $table->string('state',100);
            $table->string('distric',100);
            $table->string('add',500);
            $table->string('password',100);
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
        Schema::dropIfExists('reg');
    }
}
