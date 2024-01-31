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
        Schema::create('penyakit_dashboards', function (Blueprint $table) {
            $table->id();
            $table->string('kode_penyakit')->unique();
            $table->string('nama_penyakit')->notNullable();
            $table->text('definisi');
            $table->text('penangganan');
            $table->date('due_date');
            $table->string('gambar')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penyakit_dashboards');
    }
};