<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RetdVac extends Model
{
    use HasFactory;
    protected $fillable = [
        'trade',
        'sheet_no',
        'entry_no',
        'vac_on_retd',
        'remarks'
    ];
}
