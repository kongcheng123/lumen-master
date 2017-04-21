<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Token extends Model
{
    //指定表名
    protected $table='token';

    protected $fillable = ['userId','content'];
}