<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CertificadosDigitale
 *
 * @property $id
 * @property $name
 * @property $password
 * @property $rut
 * @property $ruta
 * @property $user_id
 * @property $created_at
 * @property $updated_at
 *
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CertificadosDigitale extends Model
{
    
    static $rules = [
		'rut' => 'required',
		'ruta' => 'required',
		'user_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','rut','ruta','user_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
    

}
