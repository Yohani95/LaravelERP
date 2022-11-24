<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Provider
 *
 * @property $id
 * @property $business_name
 * @property $rut
 * @property $direcction
 * @property $email
 * @property $phone
 * @property $giro
 * @property $comuna
 * @property $pag_web
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Provider extends Model
{
    
    static $rules = [
		'giro' => 'required',
		'comuna' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['business_name','rut','direcction','email','phone','giro','comuna','pag_web'];



}
