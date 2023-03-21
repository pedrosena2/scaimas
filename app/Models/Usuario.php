<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Usuario
 *
 * @property $id_usuario
 * @property $id_tipo
 * @property $tipo_documento
 * @property $numero_docuemento
 * @property $nombre
 * @property $apellidos
 * @property $direccion
 * @property $barrio
 * @property $numero_celular
 * @property $correo_institucional
 * @property $pass
 * @property $remember_token
 * @property $created_at
 * @property $updated_at
 *
 * @property Ambiente[] $ambientes
 * @property Asistencia[] $asistencias
 * @property EntregaAmbiente[] $entregaAmbientes
 * @property Ficha[] $fichas
 * @property InstructorArea[] $instructorAreas
 * @property NovedadAmbiente[] $novedadAmbientes
 * @property NovedadUsuario[] $novedadUsuarios
 * @property TipoUsuario $tipoUsuario
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Usuario extends Model
{
    
    static $rules = [
		'id_usuario' => 'required',
		'id_tipo' => 'required',
		'tipo_documento' => 'required',
		'numero_docuemento' => 'required',
		'nombre' => 'required',
		'apellidos' => 'required',
		'direccion' => 'required',
		'barrio' => 'required',
		'numero_celular' => 'required',
		'correo_institucional' => 'required',
		'pass' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_usuario','id_tipo','tipo_documento','numero_docuemento','nombre','apellidos','direccion','barrio','numero_celular','correo_institucional','pass'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ambientes()
    {
        return $this->hasMany('App\Models\Ambiente', 'id_usuario', 'id_usuario');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function asistencias()
    {
        return $this->hasMany('App\Models\Asistencia', 'id_usuario', 'id_usuario');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function entregaAmbientes()
    {
        return $this->hasMany('App\Models\EntregaAmbiente', 'id_usuario', 'id_usuario');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function fichas()
    {
        return $this->hasMany('App\Models\Ficha', 'id_usuario', 'id_usuario');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function instructorAreas()
    {
        return $this->hasMany('App\Models\InstructorArea', 'id_usuario', 'id_usuario');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function novedadAmbientes()
    {
        return $this->hasMany('App\Models\NovedadAmbiente', 'id_usuario', 'id_usuario');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function novedadUsuarios()
    {
        return $this->hasMany('App\Models\NovedadUsuario', 'id_usuario', 'id_usuario');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tipoUsuario()
    {
        return $this->hasOne('App\Models\TipoUsuario', 'id_tipo', 'id_tipo');
    }
    

}
