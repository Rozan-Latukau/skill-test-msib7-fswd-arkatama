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
        Schema::create('penumpang', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_travel')->references('id_travel')->on('travel')->cascadeOnDelete();
            $table->string('kode_booking');
            $table->string('nama');
            $table->enum('jenis_kelamin', ['L', 'P']);
            $table->string('kota');
            $table->integer('usia');
            $table->integer('tahun_lahir');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penumpang');
    }
};
