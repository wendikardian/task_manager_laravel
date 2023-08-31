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
        //create table statuses with id and title
        Schema::create('statuses', function (Blueprint $table) {
            $table->id(); // id
            $table->string('title'); // title
            $table->timestamps(); // created_at, updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //drop table if exist
        Schema::dropIfExists('statuses');
    }
};
