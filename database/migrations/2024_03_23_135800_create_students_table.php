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


        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('admission_id');
            $table->string('first_name');
            $table->string('last_name'); 
            $table->enum('gender', ['male', 'female']); // Remplacez Type1, Type2, Type3 par les choix réels 
            $table->date('date_of_birth');
            $table->string('email');
            $table->string('phone');
            $table->string('address');
            $table->text('bio');
            $table->string('level');
            $table->text('image');
            $table->unsignedBigInteger('family_id')->nullable();
            $table->foreign('family_id')->references('id')->on('families');
            $table->unsignedBigInteger('level_id')->nullable();
            $table->foreign('level_id')->references('id')->on('levels');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
