<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //指定表名
    protected $table='user';

    protected $fillable = ['name','pwd'];
}