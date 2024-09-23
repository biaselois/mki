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
        Schema::create('petas', function (Blueprint $table) {
            $table->increments('id_petas');
            $table->date('tanggal')->nullable();
            $table->string('nama desa', 100);
            $table->string('nama kecamatan', 50);
            $table->string('koordinat', 100);
            $table->text('peta');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('petas');
    }
};
