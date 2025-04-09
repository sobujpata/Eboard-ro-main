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
            Schema::create('pbperslists', function (Blueprint $table) {
                $table->id();
                $table->string('s_no', 11);
                $table->string('bdno',11);
                $table->string('rank',50);
                $table->string('name',100);
                $table->string('trade',50);
                $table->string('basic_trade',50)->nullable();
                $table->string('doe',20);
                $table->string('entry_no',10);
                $table->string('promotion_dt',20);
                $table->string('dor',20);
                $table->string('svc_length',20);
                $table->string('svc_left',20);
                $table->string('avg_par',11);
                $table->string('career_marks',11);
                $table->string('ttl_score',11);
                $table->string('es',11);
                $table->string('cs',11);
                $table->string('conduct_sheet',250);
                $table->string('weight',11);
                $table->string('base_unit',20);
                $table->string('other_rmks',200);
                $table->string('rmks',200);
                $table->string('sheetNo',11);
                $table->string('rmks_1',250);
                $table->string('decision',11);
                $table->string('base',20);
                $table->timestamps();
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pbperslists');
    }
};
