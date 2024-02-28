<?php

namespace App\Models\Catalogos;

use Illuminate\Database\Eloquent\Model;

class CatColonia extends Model
{
    public $table = 'cat_colonias';

    public $fillable = [
        'id',
        'nombre',
        'asentamiento',
        'codigo_postal'
    ];

	public static function colonia($id){
        return CatColonia::select('id', 'nombre', 'codigo_postal')->where('cve_mun', $id)->orderBy('id', 'ASC')->get();
    }

    public function getNombreAttribute($value)
	{
		return mb_strtoupper($value, 'UTF-8');
	}
}
