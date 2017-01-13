<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WebTeam extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'school_name', 'school_address', 'leader_name', 'leader_phone', 'member1_name', 'member1_email', 'member1_phone', 'member2_name', 'member2_email', 'member2_phone'
    ];
}
