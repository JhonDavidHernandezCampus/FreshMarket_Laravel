<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CampesinoProducto extends Model
{
    use HasFactory;

    protected $table = 'campesino_producto';
    protected $primaryKey = 'id_cam_producto';
    protected $fillable = [
        'id_cam_producto',
        'fk_id_campesino',
        'fk_id_producto',
        'precio_unitario'
    ];

}
