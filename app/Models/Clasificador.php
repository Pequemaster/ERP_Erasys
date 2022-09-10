<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clasificador extends Model
{
    use HasFactory;

    protected $table = 'Producto_Clasificador';

    protected $primaryKey = 'Id_Clasificador';

    protected $rules = 
    [
        'Cf_Descripcion' => 'unique:Producto_Clasificador, Cf_Descripcion'
    ];

}
