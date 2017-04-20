<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    //指定表名
    protected $table='question';

    protected $fillable = ['name','description','content'];
}