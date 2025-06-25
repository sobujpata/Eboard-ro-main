<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConductSheet extends Model
{
    use HasFactory;
    protected $fillable = ['bdno', 'punishment_base', 'dt_of_offense', 'rank', 'offense', 'dt_of_punishment', 'awarded', 'entry'];
}
