<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    //Relacion de uno a muchos con Student

    public function student(){
        return $this->hasMany('App\Models\Student');
    }

    //Relacion Uno a Uno (Inversa) con teacher

    public function teacher(){
        return $this->belongsTo('App\Models\Teacher');
    }

}
