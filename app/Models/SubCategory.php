<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SubCategory
 *
 * @property $id
 * @property $name
 * @property $categories_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Activo[] $activos
 * @property Category $category
 * @property Product[] $products
 * @property Supply[] $supplies
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class SubCategory extends Model
{
    
    static $rules = [
		'categories_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','categories_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function activos()
    {
        return $this->hasMany('App\Models\Activo', 'sub_category_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function category()
    {
        return $this->hasOne('App\Models\Category', 'id', 'categories_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function products()
    {
        return $this->hasMany('App\Models\Product', 'sub_category_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function supplies()
    {
        return $this->hasMany('App\Models\Supply', 'sub_category_id', 'id');
    }
    

}
