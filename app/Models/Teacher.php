<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'Dni', 'Nombre', 'Telefono', 'Direccion',
    ];

    //Relacion Uno a Uno con Subject
    public function subject(){
        return $this->hasOne('App\Models\Subject');
    }


}
