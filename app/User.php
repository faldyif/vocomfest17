<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Carbon\Carbon;

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
        $now = Carbon::now('Asia/Jakarta');
        if($this->role_id == 2) {
            if($this->team->progress == 1) {
                return "<span class='label label-default'>Registered</span>";
            } else if($this->team->progress == 2) {
                // Tanggal deadline pengumuman kelolosan 24 maret 2017
                $due = Carbon::createFromDate(2017, 3, 24, 'Asia/Jakarta');
                if($now->diffInDays($due, false) <= 0) {
                    return "<span class='label label-danger'>Tidak Lolos Seleksi Website</span>";
                }
                return "<span class='label label-confirm'>Seleksi Website</span>";
            } else if($this->team->progress == 3) {
                return "<span class='label label-success'>Finalis</span>";
            }
        } else if($this->role_id == 3) {
            if($this->team->progress == 1) {
                return "<span class='label label-default'>Registered</span>";
            } else if($this->team->progress == 2) {
                // Tanggal deadline pengumuman kelolosan 20 maret 2017
                $due = Carbon::createFromDate(2017, 3, 20, 'Asia/Jakarta');
                if($now->diffInDays($due, false) <= 0) {
                    return "<span class='label label-danger'>Tidak Lolos Seleksi Proposal</span>";
                }
                return "<span class='label label-confirm'>Seleksi Proposal</span>";
            } else if ($this->team->progress == 3) {
                // Tanggal deadline pengumuman kelolosan 7 april 2017
                $due = Carbon::createFromDate(2017, 4, 7, 'Asia/Jakarta');
                if($now->diffInDays($due, false) <= 0) {
                    return "<span class='label label-danger'>Tidak Lolos Seleksi Aplikasi</span>";
                }
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
