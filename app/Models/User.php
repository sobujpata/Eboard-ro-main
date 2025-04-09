<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ['firstName','lastName','userName','email','mobile','password','type','otp'];
    protected $attributes = [
        'otp' => '0'
    ];
}
