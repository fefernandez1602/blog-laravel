<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts'; //Si no se define la tabla, tomara el nombre de la clase en minuscula y plural como el nombre de la tabla

    protected function title(): Attribute{ // que cada vez que intentemos ingresar un registro, el atributo title pasara a minuscula
        return Attribute::make(
            set: function($value){ //Mutador
                return strtolower($value);
            },
            get: function($value){ //Accesor
                return ucfirst($value);
            }
        );
    }
}
