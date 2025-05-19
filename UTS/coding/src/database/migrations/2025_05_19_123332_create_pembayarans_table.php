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
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->id();
            $table->string('nama_warga', 100);
            $table->foreignId('id_jenis_iuran')->constrained('jenis_iuran')->onDelete('cascade');
            $table->decimal('jumlah', 10, 2);
            $table->date('tanggal_bayar');
            $table->string('bukti_pembayaran');
            $table->enum('status', ['Lunas', 'Belum']);
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
