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
        Schema::create('retd_vacs', function (Blueprint $table) {
            $table->id();
            $table->string('trade', 100);
            $table->integer('sheet_no');
            $table->integer('entry_no');
            $table->integer('vac_on_retd');
            $table->string('remarks',255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('retd_vacs');
    }
};
