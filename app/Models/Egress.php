<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Egress
 *
 * @property $id
 * @property $name
 * @property $mount
 * @property $description
 * @property $categories_id
 * @property $user_id
 * @property $created_at
 * @property $updated_at
 *
 * @property CategoriesFinance $categoriesFinance
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Egress extends Model
{
    
    static $rules = [
		'categories_id' => 'required',
		'user_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','mount','description','categories_id','user_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function categoriesFinance()
    {
        return $this->hasOne('App\Models\CategoriesFinance', 'id', 'categories_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
    

}
