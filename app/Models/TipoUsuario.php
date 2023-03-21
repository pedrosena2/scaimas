<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TipoUsuario
 *
 * @property $id_tipo
 * @property $tipo_descripcion
 * @property $created_at
 * @property $updated_at
 *
 * @property Usuario[] $usuarios
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TipoUsuario extends Model
{
    
    static $rules = [
		'id_tipo' => 'required',
		'tipo_descripcion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_tipo','tipo_descripcion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function usuarios()
    {
        return $this->hasMany('App\Models\Usuario', 'id_tipo', 'id_tipo');
    }
    

}
