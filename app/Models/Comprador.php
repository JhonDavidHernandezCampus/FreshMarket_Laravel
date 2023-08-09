<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comprador extends Model
{
    use HasFactory;
    protected $table = 'comprador';
    protected $primaryKey = 'id_comprador';

    protected $fillable = [
        'nombre_comprador',
        'compra_direccion',
        'compra_telefono'
    ];
    


}

