<?php

namespace App\Models\Catalogos;

use Illuminate\Database\Eloquent\Model;

class CatRegion extends Model
{
    protected $table = 'cat_regiones';

    protected $fillable = [
        'id',
        'nombre'
    ];

    public function distritos()
    {
        return $this->hasMany('App\Models\Catalogos\CatDistrito','region_id');
    }

    public function fiscales(){
        return $this->hasMany('App\Models\CI\Fiscal','id_region', 'id');
    }
}
