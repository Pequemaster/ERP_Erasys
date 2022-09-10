<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CuentaContable extends Model
{
    use HasFactory;

    protected $table = 'Contabilidad_Cuenta';

    protected $primaryKey = 'Id_Cuenta_Contable';
}