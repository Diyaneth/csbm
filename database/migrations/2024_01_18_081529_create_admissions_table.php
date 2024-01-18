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
        Schema::create('admissions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Course')->nullable();
            $table->string('Name')->nullable();
            $table->string('NIC')->nullable();
            $table->date('DOB')->nullable();
            $table->string('Phone_number')->nullable();
            $table->string('Email')->nullable();
            $table->string('Qualification')->nullable();
            $table->string('Location')->nullable();
            $table->string('Days')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admissions');
    }
};
