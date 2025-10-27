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
        Schema::create('conduct_sheets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('bdno');
            $table->string('present_rank',50);
            $table->string('name',100);
            $table->string('trade',100);
            $table->string('base_or_unit',100)->nullable();
            $table->date('date_of_offense')->nullable();
            $table->string('rank')->nullable();
            $table->longText('offense')->nullable();
            $table->date('date_of_punishment')->nullable();
            $table->string('awarded', 100)->nullable();
            $table->string('entry', 100)->nullable();
            $table->string('moral_trapitude', 100)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('conduct_sheets');
    }
};
