<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CategoriesFinance
 *
 * @property $id
 * @property $name
 * @property $created_at
 * @property $updated_at
 *
 * @property Egress[] $egresses
 * @property Ingress[] $ingresses
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class CategoriesFinance extends Model
{
    
    static $rules = [
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function egresses()
    {
        return $this->hasMany('App\Models\Egress', 'categories_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function ingresses()
    {
        return $this->hasMany('App\Models\Ingress', 'categories_id', 'id');
    }
    

}
