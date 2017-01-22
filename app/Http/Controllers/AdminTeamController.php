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

class AdminTeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->role_id != 1) {
            return redirect('dashboard'); 
        }
        $team = User::all()->whereIn('role_id', [2, 3]);
        return View('admin.team.index')->with('team', $team);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(Auth::user()->role_id != 1) {
            return redirect('dashboard'); 
        }
        $team = User::find($id);
        return View('admin.team.view')->with('team', $team);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Auth::user()->role_id != 1) {
            return redirect('dashboard'); 
        }
        if(User::find($id) == 2) {
            WebTeam::where('user_id', $id)->delete();
        } else if(User::find($id) == 3) {
            MobileTeam::where('user_id', $id)->delete();
        } else {
            SeminarRegistration::where('user_id', $id)->delete();
        }
        User::destroy($id);

        Session::flash('message', 'Berhasil menghapus tim!');
        return redirect('adminvocomfest17/team');
    }

    public function verify($id)
    {
        if(Auth::user()->role_id != 1) {
            return redirect('dashboard'); 
        }
        $user = User::find($id);
        $user->team->verified = 2;
        $user->team->save();

        Session::flash('message', 'Berhasil memverifikasi!');
        return redirect('adminvocomfest17/team');
    }

    public function unverify($id)
    {
        if(Auth::user()->role_id != 1) {
            return redirect('dashboard'); 
        }
        $user = User::find($id);
        $user->team->verified = 0;
        $user->team->save();

        Session::flash('message', 'Berhasil membatalkan verifikasi!');
        return redirect('adminvocomfest17/team');
    }

    public function pass($id)
    {
        if(Auth::user()->role_id != 1) {
            return redirect('dashboard'); 
        }
        $user = User::find($id);
        $user->team->progress++;
        $user->team->save();

        Session::flash('message', 'Berhasil meloloskan tim!');
        return redirect('adminvocomfest17/team');
    }

    public function unpass($id)
    {
        if(Auth::user()->role_id != 1) {
            return redirect('dashboard'); 
        }
        $user = User::find($id);
        $user->team->progress--;
        $user->team->save();

        Session::flash('message', 'Berhasil membatalkan kelolosan tim!');
        return redirect('adminvocomfest17/team');
    }
}
