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
        Schema::create('college', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Student_id');  //foreign key for student 
            $table->unsignedBigInteger('Teacher_id');  //foreign key for teacher  

            $table->timestamps();

            $table->foreign('Student_id')->references('id')->on('students')->onDelete('cascade');
            $table->foreign('Teacher_id')->references('id')->on('teachers')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('college');
    }
};
