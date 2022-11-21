<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Cellar
 *
 * @property $id
 * @property $name
 * @property $user_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Activo[] $activos
 * @property Product[] $products
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cellar extends Model
{
    
    static $rules = [
		'user_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','user_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function activos()
    {
        return $this->hasMany('App\Models\Activo', 'cellar_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function products()
    {
        return $this->hasMany('App\Models\Product', 'cellar_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
    

}
