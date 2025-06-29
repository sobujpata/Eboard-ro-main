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
        Schema::create('navbars', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('trade_id');
            $table->foreign('trade_id')->references('id')->on('trades')->cascadeOnUpdate()->cascadeOnDelete();

            $table->string('name', 100);
            $table->string('page_no', 100);
            $table->string('url', 100);
            $table->boolean('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('navbars');
    }
};
