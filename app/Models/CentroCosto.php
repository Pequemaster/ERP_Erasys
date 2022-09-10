<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CentroCosto extends Model
{
    use HasFactory;

    protected $table = 'Centro_Costo';

    protected $primaryKey = 'Id_Centro_Costo';
}
