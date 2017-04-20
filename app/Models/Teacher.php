<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    //指定表名
    protected $table='teacher';

    protected $fillable = ['name','pwd'];
}