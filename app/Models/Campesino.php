<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campesino extends Model
{
    use HasFactory;

    protected $table = 'campesino';
    protected $primaryKey = 'id_campesino';
}
