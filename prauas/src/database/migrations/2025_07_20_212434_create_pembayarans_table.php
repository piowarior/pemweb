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
         Schema::create('pembayarans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('iuran_id')->constrained('iurans')->onDelete('cascade');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // warga yang bayar
            $table->date('tanggal_bayar');
            $table->decimal('jumlah_bayar', 12, 2);
            $table->enum('status', ['pending', 'valid', 'ditolak'])->default('pending'); // status verifikasi
            $table->string('bukti_transfer')->nullable(); // jika upload bukti transfer
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayarans');
    }
};
