<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pbCurrentEstbStrVac extends Model
{
    use HasFactory;
    protected $table = 'pb_current_estb_str_vac';
    protected $fillable = [
        's_no',
        'trade',
        'rank',
        'estb',
        'str',
        'exist',
        'retd',
        'promoted_pre_pb',
        'ttl',
        'promotion',
        'score_max',
        'score_min',
        'sheetNo',
        'remarks',
    ];
}
