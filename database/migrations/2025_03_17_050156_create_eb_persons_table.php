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
        Schema::create('eb_persons', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('s_no');
            $table->string('bdno', 11);
            $table->string('rank', 50);
            $table->string('name', 50);
            $table->string('trade', 50);
            $table->string('base_unit', 50);
            $table->string('doe', 50);
            $table->string('entry_no', 50);
            $table->string('avg_par', 50);
            $table->string('career_marks', 50);
            $table->string('conduct_sheet', 50);
            $table->string('dor', 50);
            $table->string('rmks_by_ro', 250);
            $table->string('rmks_by_board', 50);
            $table->string('type', 50)->default(0);
            $table->string('decision', 50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eb_persons');
    }
};
