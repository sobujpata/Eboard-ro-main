<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trade extends Model
{
    protected $fillable = [
        'id',
        'trade',
    ];
    public function navbars()
    {
        return $this->hasMany(Navbar::class, 'trade_id', 'id');
    }

}
