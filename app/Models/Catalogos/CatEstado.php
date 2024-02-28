<?php

namespace App\Models\Catalogos;

use Illuminate\Database\Eloquent\Model;

class CatEstado extends Model
{
    protected $table = 'cat_estados';

    protected $fillable = [
        'nombre',
        'abreviatura',
    ];

    public function municipios()
    {
        return $this->hasMany('App\Models\Catalogos\CatMunicipio');
    }

    public function getNombreAttribute($value)
	{		
		return mb_strtoupper($value, 'UTF-8');
	}


}
