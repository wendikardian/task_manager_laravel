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
        //
        // create migration for tasks with column id, user_id, image_id, status_id, title, description, note, published_at, created_at, updated_at, deleted_at
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users'); // user_id
            $table->foreignId('image_id')->constrained('images'); // image_id
            $table->foreignId('status_id')->constrained('statuses'); // status_id
            $table->string('title'); // title
            $table->text('description'); // description
            $table->text('note'); // note
            $table->timestamp('published_at')->nullable(); // published_at
            $table->timestamps(); // created_at, updated_at
            $table->softDeletes(); // deleted_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        // drop table tasks
        Schema::dropIfExists('tasks');
    }
};
