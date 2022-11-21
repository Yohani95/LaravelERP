<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TypesPrint
 *
 * @property $id
 * @property $type_invoice
 * @property $type_ticket
 * @property $user_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Setting[] $settings
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class TypesPrint extends Model
{
    
    static $rules = [
		'type_invoice' => 'required',
		'type_ticket' => 'required',
		'user_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['type_invoice','type_ticket','user_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function settings()
    {
        return $this->hasMany('App\Models\Setting', 'type_print_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
    

}
