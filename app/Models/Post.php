<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts'; //Si no se define la tabla, tomara el nombre de la clase en minuscula y plural como el nombre de la tabla

    protected function casts(): array{ //Transforma tanto al recuperar como al insertar
        return [
            'published_at' => 'datetime',
            'is_active' => 'boolean', 
        ];
    }

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

    public function getRouteKeyName() //Funcion que sirve para indicar que dato utilice para buscar (como el ID, por ejemplo)
    {
        return 'slug';
    }
}
