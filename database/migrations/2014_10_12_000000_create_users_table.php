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
            $table->string('firstname');
            $table->string('surname');
            $table->string('phone');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('photo');
            $table->enum('status', ['active', 'inactive'])->default('inactive');
            $table->string('address');
            $table->enum('role', ['admin', 'vendor', 'customer'])->default('inactive');
            $table->string('password');
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
