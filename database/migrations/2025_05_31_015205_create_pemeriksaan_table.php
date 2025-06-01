<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   public function up()
{
    Schema::create('examinations', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('user_id'); // mahasiswa
        $table->date('tanggal_kunjungan');
        $table->string('keluhan');
        $table->text('diagnosa')->nullable();
        $table->text('resep_obat')->nullable();
        $table->timestamps();

        $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemeriksaan');
    }
};
