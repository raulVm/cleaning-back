<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Solicitud extends Model
{
    protected $table = 'solicitudes';

    use SoftDeletes;
    use HasFactory;
    protected $fillable = [
        'id_usuario',
        'nombre_completo',
        'correo_electronico',
        'telefono',
        'id_estado',
        'id_municipio',
        'id_localidad',
        'id_colonia',
        'servicio',
        'descripcion',
        'estatus'
    ];
    public function catEstado()
    {
        return $this->belongsTo('App\Models\Catalogos\CatEstado','id_estado');
    }

    public function catMunicipio()
    {
        return $this->belongsTo('App\Models\Catalogos\CatMunicipio','id_municipio', 'cve_mun')->where('id_estado',$this->cve_ent);
    }

    public function catLocalidad()
    {
        return $this->belongsTo('App\Models\Catalogos\CatLocalidad','id_localidad', 'cve_loc')->where('id_estado',$this->cve_ent)->where('id_municipio',$this->cve_mun);
    }

    public function catColonia()
    {
        return $this->belongsTo('App\Models\Catalogos\CatColonia','id_colonia', 'id')->where('id_estado',$this->cve_ent)->where('id_municipio',$this->cve_mun);
    }
}
