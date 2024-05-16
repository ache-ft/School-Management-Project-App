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

        Schema::create('families', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name'); 
            $table->enum('gender', ['male', 'female']); 
 
            $table->string('occupation');
            $table->string('cin');
            $table->string('email');
            $table->string('address');
            $table->string('phone');
            $table->text('bio');
            $table->text('image');
            

            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('families');
    }
};
