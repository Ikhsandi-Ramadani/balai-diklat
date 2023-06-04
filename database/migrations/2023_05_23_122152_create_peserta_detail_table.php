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
        Schema::create('peserta_detail', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('peserta_id');
            $table->string('fc_kk')->nullable();
            $table->string('fc_ktp')->nullable();
            $table->string('surat_sehat')->nullable();
            $table->string('surat_usaha')->nullable();
            $table->string('ijazah')->nullable();
            $table->string('foto')->nullable();
            $table->enum('status', ['pending', 'ditolak', 'disetujui', 'lulus'])->default('pending');
            $table->longText('keterangan')->nullable();
            $table->timestamps();

            $table->foreign('peserta_id')->references('id')->on('peserta')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peserta_details');
    }
};
