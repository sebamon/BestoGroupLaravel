<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Rubro;

class Busqueda extends Model
{
    protected $table='busquedas';

    protected $primaryKey='idBusqueda';
    protected $fillable= array('idRubro','empresa','titulo','descripcion');
    protected $hidden = ['created_at','updated_at'];

    use HasFactory;

    public function rubro(){
        return $this->belongsTo(Rubro::class);
    }
}
