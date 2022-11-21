<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Caf
 *
 * @property $id
 * @property $name
 * @property $ruta
 * @property $expiration_date
 * @property $quantity_avaible
 * @property $initial_folio
 * @property $last_folio
 * @property $current_folio
 * @property $document_code
 * @property $user_id
 * @property $created_at
 * @property $updated_at
 *
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Caf extends Model
{
    
    static $rules = [
		'name' => 'required',
		'ruta' => 'required',
		'quantity_avaible' => 'required',
		'initial_folio' => 'required',
		'last_folio' => 'required',
		'current_folio' => 'required',
		'document_code' => 'required',
		'user_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','ruta','expiration_date','quantity_avaible','initial_folio','last_folio','current_folio','document_code','user_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
    

}
