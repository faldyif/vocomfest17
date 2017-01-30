<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// custom namespace
use App\User;
use Session;
use Illuminate\Support\Facades\Auth;

class AdminSemnasController extends Controller
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
        $team = User::all()->whereIn('role_id', [4]);
        return View('admin.semnas.index')->with('team', $team);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::user()->role_id != 1) {
            return redirect('dashboard'); 
        }
        return view('admin.semnas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Auth::user()->role_id != 1) {
            return redirect('dashboard'); 
        }
        $this->validate($request, [
            'code' => 'required'
        ]);

        $semnas = \App\SeminarRegistration::where('hash', $request->code)->get();

        Session::flash('semnas', $semnas);
        return redirect('adminvocomfest17/semnas/create');
    }

    public function put(Request $request)
    {
        if(Auth::user()->role_id != 1) {
            return redirect('dashboard'); 
        }
        $this->validate($request, [
            'code' => 'required'
        ]);

        $semnas = \App\SeminarRegistration::where('hash', $request->code)->get()->first();
        $semnas->progress = 3;
        $semnas->save();

        Session::flash('message', 'Berhasil menggunakan kode penukaran!');
        return redirect('adminvocomfest17/semnas/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }
}
