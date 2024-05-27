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
        Schema::create('laporan', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('driver_id');
            $table->foreign('driver_id')->references('id')->on('drivers');
            $table->uuid('paket_id');
            $table->foreign('paket_id')->references('id')->on('paket');
            $table->uuid('surat_jalan_id');
            $table->foreign('surat_jalan_id')->references('id')->on('surat_jalan');
            $table->string('keluhan');
            $table->string('image');
            $table->decimal('latitude', 10, 8);
            $table->decimal('longitude', 11, 8);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laporan');
    }
};
