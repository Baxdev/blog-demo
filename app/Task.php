<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //query scope static function

    public static function scopeIncomplete($query)
    {
    	return $query->where('completed', 0);
    }

}
