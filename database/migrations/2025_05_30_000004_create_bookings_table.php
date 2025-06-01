<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();  // ubah jadi nullable
            $table->foreignId('doctor_id')->constrained('jadwals')->onDelete('cascade');
            $table->string('nama');  // TAMBAHKAN INI
            $table->string('nim');   // TAMBAHKAN INI
            $table->string('diagnosa');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bookings');
    }
};