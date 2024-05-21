<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    //Relacion Uno a Muchos (Inversa) con Subject
    public function subject(){
        return $this->belongsTo('App\Models\Subject');
    }





}
