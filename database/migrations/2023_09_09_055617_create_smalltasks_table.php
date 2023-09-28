<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('smalltasks', function (Blueprint $table) {
            $table->id('id');
            $table->foreignId('medtask_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->string('task_name', 20);
            $table->string('task_progress', 50)->nullable();
            $table->boolean('task_state')->nullable();   
            $table->string('memo', 200)->nullable();
            $table->string('task_eval', 20)->nullable();
            $table->date('start_at');
            $table->date('end_at');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('smalltasks');
    }
};
