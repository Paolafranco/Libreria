<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libros extends Model
{
    use HasFactory;
    
    public function autor(){
        return $this-> hasMany(Autor::class);
    }

    public function generos(){
        return $this-> hasOne(Autor::class);
    }

    public function reserva(){
        return $this->hasOne(Reserva::class);
    }

    

}
