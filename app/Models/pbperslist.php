<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pbperslist extends Model
{
    protected $fillable = [
        "s_no",
        "bdno",
        "rank",
        "name",
        "trade",
        "basic_trade",
        "entry_no",
        "avg_par",
        "career_marks",
        "ttl_score",
        "es",
        "cs",
        "conduct_sheet",
        "weight",
        "base_unit",
        "base",
        "sheetNo",
        "other_rmks",
        "rmks",
        "rmks_1",
        "decision",
    ] ;

    // function conductSheet(){
    //     return $this->belongsTo(ConductSheet::class, 'bdno' ,'bdno');
    // }

}
