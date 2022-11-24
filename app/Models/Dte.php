<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Dte
 *
 * @property $id
 * @property $type_document
 * @property $num_folio
 * @property $track_id
 * @property $name_route_xml
 * @property $confirmed_send_sii
 * @property $user_id
 * @property $status_id
 * @property $payment_status
 * @property $created_at
 * @property $updated_at
 *
 * @property Status $status
 * @property Status $status
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Dte extends Model
{
    
    static $rules = [
		'type_document' => 'required',
		'num_folio' => 'required',
		'track_id' => 'required',
		'name_route_xml' => 'required',
		'user_id' => 'required',
		'status_id' => 'required',
		'payment_status' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['type_document','num_folio','track_id','name_route_xml','confirmed_send_sii','user_id','status_id','payment_status'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function status()
    {
        return $this->hasOne('App\Models\Status', 'id', 'payment_status');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function status_dte()
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
