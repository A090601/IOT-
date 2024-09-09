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
        Schema::create('tindakan_medis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pendaftaran_id'); //ini adalah relasi ke data pasien
            $table->string('nama_penyakit');
            $table->string('nama_tindakan');
            $table->string('hasil_periksa');
            $table->string('nama_obat');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tindakan_medis');
    }
};
