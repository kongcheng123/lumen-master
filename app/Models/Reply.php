<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    //指定表名
    protected $table='reply';

    protected $fillable = ['questionId','content'];
}