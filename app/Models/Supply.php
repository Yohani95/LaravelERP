<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Supply
 *
 * @property $id
 * @property $name
 * @property $code
 * @property $count
 * @property $price
 * @property $user_id
 * @property $sub_category_id
 * @property $created_at
 * @property $updated_at
 *
 * @property SubCategory $subCategory
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Supply extends Model
{
    
    static $rules = [
		'user_id' => 'required',
		'sub_category_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','code','count','price','user_id','sub_category_id'];


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
