<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 *
 * @property $id
 * @property $name
 * @property $code
 * @property $count
 * @property $price
 * @property $created_at
 * @property $updated_at
 * @property $user_id
 * @property $cellar_id
 * @property $sub_category_id
 *
 * @property Cellar $cellar
 * @property SubCategory $subCategory
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Product extends Model
{
    
    static $rules = [
		'user_id' => 'required',
		'cellar_id' => 'required',
		'sub_category_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','code','count','price','user_id','cellar_id','sub_category_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function cellar()
    {
        return $this->hasOne('App\Models\Cellar', 'id', 'cellar_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function subCategory()
    {
        return $this->hasOne('App\Models\SubCategory', 'id', 'sub_category_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
    

}
