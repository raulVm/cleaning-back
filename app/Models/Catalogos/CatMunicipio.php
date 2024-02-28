<?php

namespace App\Models\Catalogos;

use Illuminate\Database\Eloquent\Model;

class CatMunicipio extends Model
{
    public $table = 'cat_municipios';

    public $fillable = [
        'id',
        'cve_ent',
        'cve_mun',
        'nombre',
        'id_distrito'
    ];

    public function estado(){
        return $this->belongsTo('App\Models\Catalogos\CatEstado', 'cve_ent', 'id');
    }

    public function localidades(){
        return $this->hasMany('App\Models\Catalogos\CatLocalidad');
    }

    public static function municipios($id){
        return CatMunicipio::select('id', 'nombre')->where('cve_ent', $id)->orderBy('id', 'ASC')->get();
    }
    // public function distrito(){
    //     return $this->belongsTo('App\Models\Catalogos\CatDistrito', 'id_distrito');
    // }
    public function getNombreAttribute($value)
	{		
		return mb_strtoupper($value, 'UTF-8');
	}    
}
