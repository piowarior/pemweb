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
         Schema::create('iurans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users'); // bendahara yang input
            $table->string('judul'); // contoh: Iuran Bulan Juli 2025
            $table->text('deskripsi')->nullable();
            $table->date('tanggal_tagihan'); // tanggal tagihan mulai berlaku
            $table->decimal('jumlah', 12, 2); // nominal iuran
            $table->enum('status', ['aktif', 'selesai'])->default('aktif');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('iurans');
    }
};
