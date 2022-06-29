<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transporte extends Model
{
    use HasFactory;
    protected $fillable = ['placa','modeloautobus','marcaautobus','modelomotor','combustible','longitud','latitud','ruta','idmrotacion','idbase','borrado'];
}