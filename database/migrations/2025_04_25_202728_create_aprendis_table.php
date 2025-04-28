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
        Schema::create('aprendis', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->integer('cell_number');
            $table->timestamps();
            //le estoy pasando las foreign key de course,computer.
            $table->unsignedBigInteger('course_id')->nullable();
            $table->unsignedBigInteger('computer_id')->nullable();

             $table->foreign('course_id')
             ->references('id')
             ->on('courses')
             ->onDelete('cascade');

             $table->foreign('computer_id')
             ->references('id')
             ->on('computers')
             ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aprendis');
    }
};
