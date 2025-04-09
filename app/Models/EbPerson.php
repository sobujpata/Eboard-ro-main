<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EbPerson extends Model
{
    use HasFactory;
    protected $table='eb_persons';

    protected $fillable = [
        's_no',
        'bdno',
        'rank',
        'name',
        'trade',
        'base_unit',
        'doe',
        'entry_no',
        'avg_par',
        'career_marks',
        'conduct_sheet',
        'dor',
        'rmks_by_ro',
        'rmks_by_board',
        'type',
        'decision',
        'salient_points',
    ];
}
