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
        Schema::create('previouse_pb', function (Blueprint $table) {
            $table->bigIncrements('id'); // Auto-increment column
            $table->integer('s_no')->nullable(); // Remove auto-increment
            $table->string('trade', 20)->nullable();
            $table->string('renk', 20)->nullable();
            $table->string('estb', 20)->nullable();
            $table->string('str', 20)->nullable();
            $table->string('exist', 20)->nullable();
            $table->string('retd', 20)->nullable();
            $table->string('promoted_pre_pb', 20)->nullable();
            $table->string('ttl', 20)->nullable();
            $table->string('promotion', 20)->nullable();
            $table->string('score_max', 20)->nullable();
            $table->string('score_min', 20)->nullable();
            $table->string('remarks', 20)->nullable();
            $table->string('sheetNo', 20)->nullable();
            $table->timestamps(); // Adds created_at and updated_at columns
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('previouse_pb');
    }
};
