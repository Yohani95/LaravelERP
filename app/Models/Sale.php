<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Sale
 *
 * @property $id
 * @property $description
 * @property $iva
 * @property $total
 * @property $neto
 * @property $num_folio
 * @property $type_document
 * @property $discount
 * @property $name_route_xml
 * @property $payment_date
 * @property $user_id
 * @property $status_id
 * @property $deleted_at
 * @property $created_at
 * @property $updated_at
 *
 * @property Status $status
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Sale extends Model
{
    use SoftDeletes;

    static $rules = [
		'iva' => 'required',
		'total' => 'required',
		'neto' => 'required',
		'num_folio' => 'required',
		'type_document' => 'required',
		'discount' => 'required',
		'user_id' => 'required',
		'status_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['description','iva','total','neto','num_folio','type_document','discount','name_route_xml','payment_date','user_id','status_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function status()
    {
        return $this->hasOne('App\Models\Status', 'id', 'status_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
    

}
