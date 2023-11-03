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
        Schema::create('keuangan_masjids', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->string('uraian');
            $table->integer('pemasukan');
            $table->integer('pengeluaran');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keuangan_masjids');
    }
};
