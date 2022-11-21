<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Company
 *
 * @property $id
 * @property $razon_social
 * @property $rut_empresa
 * @property $giro
 * @property $comuna
 * @property $direccion
 * @property $telefono
 * @property $pagina_web
 * @property $email
 * @property $ruta_logo
 * @property $fecha_resolucion
 * @property $numero_resolucion
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Company extends Model
{
    
    static $rules = [
		'razon_social' => 'required',
		'rut_empresa' => 'required',
		'giro' => 'required',
		'comuna' => 'required',
		'direccion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['razon_social','rut_empresa','giro','comuna','direccion','telefono','pagina_web','email','ruta_logo','fecha_resolucion','numero_resolucion'];



}
