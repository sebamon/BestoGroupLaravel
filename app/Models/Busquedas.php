<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Busquedas extends Model
{
    protected $table='busquedas';

    protected $primaryKey='idBusqueda';
    protected $fillable= array('idRubro','empresa','titulo','descripcion');
    protected $hidden = ['created_at','updated_at'];

    use HasFactory;
}
