<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    //Relacion muchos a muchos con persona
    public function vehicle(){
        return $this->belongsToMany('App\Models\Vehicle');
    }


}
