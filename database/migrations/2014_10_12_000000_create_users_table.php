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
            $table->strin('role_id')->default('3');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('username')->unique()->nullable();
            $table->string('image')->nullable();
            $table->strign('about')->nullable();
            $table->string('password');

            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();

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
