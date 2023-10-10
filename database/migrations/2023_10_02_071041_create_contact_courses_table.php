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
        Schema::create('contact_courses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('university');
            $table->string('jurusan');
            $table->enum('hari', ['Senin-Selasa', 'Rabu-Kamis', 'Jumat-Sabtu']);
            // ntuk waktu nya
            $table->enum('waktu', ['Pagi', 'Siang', 'Sore']);
            // untuk jam nya
            $table->enum('jam', ['08.00-10.00', '10.00-12.00', '13.00-15.00', '15.00-17.00']);
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_courses');
    }
};