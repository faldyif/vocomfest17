<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Custom class
use App\User;
use App\WebTeam;
use App\MobileTeam;
use Session;
use Illuminate\Support\Facades\Auth;

class VerifyTeamController extends Controller
{
    public function lock()
    {
    	$team = Auth::user()->team;
        if($team->leader_identity == NULL) {
            Session::flash('error', 'Anda harus mengupload scan identitas terlebih dahulu.');
            return redirect('dashboard/team');
        }
    	$team->verified = 1;
    	$team->save();

        Session::flash('message', 'Berhasil mengunci data! Anda dapat melanjutkan ke tahap pembayaran.');
        return redirect('dashboard');
    }

    public function unlock()
    {
    	$team = Auth::user()->team;
    	$team->verified = 0;
    	$team->save();

        Session::flash('message', 'Berhasil membuka kunci. Silahkan edit dan segera kunci lagi profil tim anda untuk verifikasi.');
        return redirect('dashboard');
    }
}
