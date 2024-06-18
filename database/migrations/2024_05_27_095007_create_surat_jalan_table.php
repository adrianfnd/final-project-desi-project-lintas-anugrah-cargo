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
        Schema::create('surat_jalan', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('driver_id');
            $table->foreign('driver_id')->references('id')->on('drivers');
            $table->string('list_paket');
            $table->string('status');
            $table->string('sender');
            $table->decimal('sender_latitude', 10, 8);
            $table->decimal('sender_longitude', 11, 8);
            $table->string('receiver');
            $table->decimal('receiver_latitude', 10, 8);
            $table->decimal('receiver_longitude', 11, 8);
            $table->string('checkpoint')->nullable();
            $table->decimal('checkpoint_latitude', 10, 8)->nullable();
            $table->decimal('checkpoint_longitude', 11, 8)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surat_jalan');
    }
};
