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
        Schema::table('peserta_detail', function (Blueprint $table) {
            $table->unsignedBigInteger('pelatihan_id')->after('peserta_id');
            $table->foreign('pelatihan_id')->references('id')->on('pelatihan')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('peserta_detail', function (Blueprint $table) {
            //
        });
    }
};
