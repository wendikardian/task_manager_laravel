<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //create users table with id, name, email, email_verified_at, password, remember_token, is_admin, created_at, updated_at
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // id
            $table->string('name'); // name
            $table->string('email')->unique(); // email
            $table->timestamp('email_verified_at')->nullable(); // email_verified_at
            $table->string('password'); // password
            $table->rememberToken(); // remember_token
            $table->boolean('is_admin')->default(false); // is_admin
            $table->timestamps(); // created_at, updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //drop tables if exists
        Schema::dropIfExists('users');
    }
};
