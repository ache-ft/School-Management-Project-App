<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->enum('gender', ['male', 'female']); 
            $table->date('date_of_birth')->nullable();
            $table->string('father_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('nic')->nullable();
            $table->string('level')->nullable();
            $table->string('subject')->nullable();       
            $table->string('email')->unique();
            $table->text('address')->nullable();
            $table->string('phone')->unique();
            $table->text('bio')->nullable();
            $table->string('image')->nullable(); // Chemin vers la photo (peut-être stocké dans le système de fichiers)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teachers');
    }
}
