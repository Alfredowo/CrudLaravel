<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    public function categoria()
    {
        return $this->belongsTo(categorias::class, 'categoria_id', 'id');
    }

    protected $fillable = [
        'nombre',
        'descripcion',
        'precio',
        'categoria_nombre'
    ];
}
