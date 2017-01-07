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
        'name', 'email', 'password', 'role_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function team()
    {
        if($this->role_id == 2)
        {
            return $this->hasOne('App\WebTeam', 'user_id');
        }
        else if($this->role_id == 3)
        {
            return $this->hasOne('App\MobileTeam', 'user_id');
        }
        else
        {
            return $this->hasOne('App\SeminarRegistration', 'user_id');
        }
    }
}
