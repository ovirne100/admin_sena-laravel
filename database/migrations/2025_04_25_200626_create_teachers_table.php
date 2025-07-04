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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email', 80);
            $table->timestamps();
            //aqui debo pasarle laa llaves foraneas de area-id, training_center_id
            $table->unsignedBigInteger('area_id')->nullable();
            $table->unsignedBigInteger('training_center_id')->nullable();

             $table->foreign('area_id')
             ->references('id')
             ->on('areas')
             ->onDelete('cascade');

             $table->foreign('training_center_id')
             ->references('id')
             ->on('training_centers')
             ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
