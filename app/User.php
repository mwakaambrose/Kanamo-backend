<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        // identification info
        'name',
        'email',
        'password',
        'business_name',    
        'address',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Get the events for the user.
     */
    public function events()
    {
        return $this->hasMany('App\Event');
    }

    /**
     * Get the events for the user.
     */
    public function business()
    {
        return $this->belongsTo('App\Business');
    }

}
