<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categorias extends Model
{
    public function productos()
    {
        //return $this->hasMany(productos::class);
        return $this->hasMany(Producto::class, 'categoria_id');
    }

    use HasFactory;
}
