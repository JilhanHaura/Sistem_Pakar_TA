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
        Schema::create('rule_lps', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('rule_id');
            $table->unsignedBigInteger('gejala_id');
            $table->unsignedBigInteger('penyakit_id');
            $table->foreign('rule_id')->references('id')->on('rule_dashboards')->onDelete('cascade');
            $table->foreign('gejala_id')->references('id')->on('gejala_dashboards')->onDelete('cascade');
            $table->foreign('penyakit_id')->references('id')->on('penyakit_dashboards')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rule_lps');
    }
};