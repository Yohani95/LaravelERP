<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class SoldProduct
 *
 * @property $id
 * @property $name
 * @property $code
 * @property $quantity
 * @property $unit_price
 * @property $user_id
 * @property $cellar_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Cellar $cellar
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class SoldProduct extends Model
{
    
    static $rules = [
		'name' => 'required',
		'code' => 'required',
		'quantity' => 'required',
		'unit_price' => 'required',
		'user_id' => 'required',
		'cellar_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','code','quantity','unit_price','user_id','cellar_id'];


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
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
    

}
