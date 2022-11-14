<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {

            $table->id();
            $table->string('username');
            $table->string('email')->unique();
            $table->string('password');
            $table->date('date_joined');
            $table->date('dob')->default(date('Y-m-d', time()));
            $table->string('phone')->default('');
            $table->string('image_url')->default('default.jpg');
            $table->boolean('is_admin')->default(false);


            // do not touch
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
