<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
	
	    /**
     * A user has many pins
     *
     * @return HasMany
     */
    public function pins()
    {
        return $this->hasMany('App\Models\Pin');
    }

    /**
     * A user can favorite many pins
     *
     */
    public function favorites()
    {
        return $this->belongsToMany('App\Models\Pin', 'favorites')->withTimestamps();
    }
}
