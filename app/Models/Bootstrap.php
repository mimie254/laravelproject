<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bootstrap extends Model
{
    use HasFactory;
    //protected $table = 'bootstraps';
    protected $fillable=['email','password','address','address_2','city','gender'];
    public $timestamps = false;
}
