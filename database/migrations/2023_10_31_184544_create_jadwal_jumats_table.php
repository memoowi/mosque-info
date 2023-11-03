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
        Schema::create('jadwal_jumats', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->string('imam');
            $table->string('khotib');
            $table->string('muazin');
            $table->string('judul_khotbah');
            $table->tinyInteger('is_active')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwal_jumats');
    }
};
