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

    public function getKategori() {
        if($this->role_id == 2)
        {
            return "Web Design Competition";
        }
        else if($this->role_id == 3)
        {
            return "Mobile Apps Development Competition";
        }
        else
        {
            return "Seminar Nasional";
        }
    }

    public function getPhase()
    {
        if($this->role_id == 2) {
            if($this->team->progress == 1) {
                return "<span class='label label-default'>Registered</span>";
            } else if($this->team->progress == 2) {
                return "<span class='label label-confirm'>Seleksi Website</span>";
            } else if($this->team->progress == 3) {
                return "<span class='label label-success'>Finalis</span>";
            }
        } else if($this->role_id == 3) {
            if($this->team->progress == 1) {
                return "<span class='label label-default'>Registered</span>";
            } else if($this->team->progress == 2) {
                return "<span class='label label-confirm'>Seleksi Proposal</span>";
            } else if ($this->team->progress == 3) {
                return "<span class='label label-info'>Seleksi Aplikasi</span>";
            } else if($this->team->progress == 4) {
                return "<span class='label label-success'>Finalis</span>";
            }
        } else {
            if($this->team->progress == 1) {
                return "<span class='label label-default'>Menunggu Pembayaran</span>";
            } else if($this->team->progress == 2) {
                return "<span class='label label-confirm'>Pengambilan Tiket</span>";
            } else if ($this->team->progress == 3) {
                return "<span class='label label-info'>Sudah Mengambil Tiket</span>";
            }
        }
        return "";
    }

    public function verify()
    {
        if($this->team->verified == 2) {
            return "<span class='label label-success'>Terverifikasi</span>";
        } else if($this->team->verified == 0) {
            return "<span class='label label-danger'>Belum Terverifikasi</span>";
        } else {
            return "<span class='label label-info'>Menunggu Persetujuan</span>";
        }
    }
}
