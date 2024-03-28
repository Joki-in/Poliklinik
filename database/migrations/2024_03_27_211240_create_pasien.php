<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pasien', function (Blueprint $table) {
            $table->id();
            $table->string('no_rm');
            $table->string('nik')->unique(); // Kolom NIK dengan konstrain unik
            $table->string('nama');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('no_telp');
            $table->enum('status_perkawinan', ['Belum Kawin', 'Kawin', 'Janda', 'Duda']);
            $table->text('alamat');
            $table->enum('pembayaran', ['BPJS', 'Umum']);
            $table->string('rt'); // Kolom RT (Rukun Tetangga)
            $table->string('rw'); // Kolom RW (Rukun Warga)
            $table->integer('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pasien');
    }
};
