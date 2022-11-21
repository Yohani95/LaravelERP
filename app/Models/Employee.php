<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Employee
 *
 * @property $id
 * @property $name
 * @property $lastname
 * @property $rut
 * @property $direcction
 * @property $email
 * @property $phone
 * @property $user_id
 * @property $job_position_id
 * @property $created_at
 * @property $updated_at
 *
 * @property JobPosition $jobPosition
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Employee extends Model
{
    
    static $rules = [
		'user_id' => 'required',
		'job_position_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','lastname','rut','direcction','email','phone','user_id','job_position_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function jobPosition()
    {
        return $this->hasOne('App\Models\JobPosition', 'id', 'job_position_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
    

}
