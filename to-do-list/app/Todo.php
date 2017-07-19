<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $fillable=['task','user_id','date','checked'];//temp

    public function images(){
        return $this->hasMany('App\Image');
    }
}
