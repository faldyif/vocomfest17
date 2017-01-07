<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MobileTeam extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'instance_name', 'instance_address', 'leader_name', 'leader_phone', 'member1_name', 'member1_email', 'member1_phone', 'member2_name', 'member2_email', 'member2_phone', 'member3_name', 'member3_email', 'member3_phone'
    ];

    public function user()
    {
        return 0;
    }
}
