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
        Schema::create('subtasks', function (Blueprint $table) {
            $table->id();
            $table->text("subtask")->nullable();

            $table->boolean('completed')->default(false);
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            
            $table->unsignedBigInteger('task_id');
            $table->foreign('task_id')->references('id')->on('tasks');


            // $table->unsignedBigInteger('book_id')->nullable();
            // $table->foreign('book_id')->references('id')->on('books');
            $table->timestamps();
        });


        // Schema::create('subtask_task', function (Blueprint $table) {
        //     $table->unsignedBigInteger('task_id');
        //     $table->foreign('task_id')->references('id')->on('tasks');

        //     $table->unsignedBigInteger('subtask_id');
        //     $table->foreign('subtask_id')->references('id')->on('subtasks');
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subtasks');
        // Schema::dropIfExists('subtask_task');
    }
};
