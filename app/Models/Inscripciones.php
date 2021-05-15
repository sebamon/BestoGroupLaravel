<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inscripciones extends Model
{ 
    protected $table='inscripciones';

    protected $primaryKey='idInscripcion';
    protected $fillable= array('idBusqueda','fecha','apellido','nombre');
    protected $hidden = ['created_at','updated_at'];

    use HasFactory;
}
