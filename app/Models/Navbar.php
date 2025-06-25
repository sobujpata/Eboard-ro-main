<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Navbar extends Model
{
    use HasFactory;
    protected $fillable = [
        'trade_id',
        'name',
        'page_no',
        'url',
        'status',
    ];
    public function trade()
    {
        return $this->belongsTo(Trade::class, 'trade_id', 'id');
    }
}
