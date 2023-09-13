<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('bigtasks', function (Blueprint $table) {
            $table->id('id');
            $table->foreignId('user_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->string('task_name', 20);
            $table->string('task_progress', 50);
            $table->boolean('task_state');   
            $table->string('memo', 200);
            $table->string('task_eval', 20);
            $table->date('start_at');
            $table->date('end_at');
            $table->boolean('public');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bigtasks');
    }
};
