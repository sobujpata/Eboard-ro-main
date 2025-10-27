<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConductSheet extends Model
{
    protected $fillable = [
        'bdno',
        'present_rank',
        'name',
        'trade',
        'base_or_unit',
        'date_of_offense',
        'rank',
        'offense',
        'date_of_punishment',
        'awarded',
        'entry',
        'moral_trapitude',
    ];
}
