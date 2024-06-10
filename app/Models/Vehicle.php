<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    //Relacion muchos a muchos con persona
    public function person(){
        return $this->belongsToMany('App\Models\Person');
    }

}
