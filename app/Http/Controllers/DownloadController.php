<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Custom class
use App\User;
use App\MobileTeam;
use App\WebTeam;
use App\SeminarRegistration;
use Session;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;

class DownloadController extends Controller
{
    public function wdc_team()
    {
        if(Auth::user()->role_id != 1) {
            return redirect('dashboard'); 
        }
        $data = User::whereIn('role_id', [2])
            ->join('web_teams', 'users.id', '=', 'web_teams.user_id')
            ->get();

        Excel::create('WDC_List', function($excel) use($data) {
            $excel->sheet('Daftar Tim', function($sheet) use($data) {
                $sheet->fromModel($data);
            });
        })->export('xls');
    }

    public function madc_team()
    {
        if(Auth::user()->role_id != 1) {
            return redirect('dashboard'); 
        }
        $data = User::whereIn('role_id', [3])
            ->join('mobile_teams', 'users.id', '=', 'mobile_teams.user_id')
            ->get();

        Excel::create('MADC_List', function($excel) use($data) {
            $excel->sheet('Daftar Tim', function($sheet) use($data) {
                $sheet->fromModel($data);
            });
        })->export('xls');
    }


    public function semnas()
    {
        if(Auth::user()->role_id != 1) {
            return redirect('dashboard'); 
        }
        $data = User::whereIn('role_id', [4])
            ->join('seminar_registrations', 'users.id', '=', 'seminar_registrations.user_id')
            ->get();

        Excel::create('Semnas_List', function($excel) use($data) {
            $excel->sheet('Daftar Peserta', function($sheet) use($data) {
                $sheet->fromModel($data);
            });
        })->export('xls');
    }
}
