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
        Schema::create('films', function (Blueprint $table) {
            $table->id();
            $table->string('thumbnile');
            $table->string('vidio');
            $table->string('judul');
            $table->longText('sinopsis');
            $table->time('durasi');
            $table->integer('minimal_usia');
            $table->foreignId('kategori_id')->constrained();
            $table->date('tayang');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('films');
    }
};
