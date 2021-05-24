<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Busqueda;
class Inscripcion extends Model
{ 
    protected $table='inscripciones';

    protected $primaryKey='idInscripcion';
    protected $fillable= array('idBusqueda','fecha','apellido','nombre');
    protected $hidden = ['created_at','updated_at'];

    use HasFactory;
    public function busqueda(){
        //   return $this->belongsTo(Rubro::class);
           return $this->belongsTo(Busqueda::class, 'foreign_key');
       }
}
