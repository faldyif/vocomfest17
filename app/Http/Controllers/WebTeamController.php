<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Auth;

class WebTeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $this->validate($request, [
            'leader_name' => 'required',
            'leader_phone' => 'required',
            'id_leader' => 'image',
            'id_member1' => 'image',
            'id_member2' => 'image'
        ]);

        $team = \App\WebTeam::find($id);
        $team->leader_name = $request['leader_name'];
        $team->leader_phone = $request['leader_phone'];
        $team->member1_name = $request['member1_name'];
        $team->member1_email = $request['member1_email'];
        $team->member1_phone = $request['member1_phone'];
        $team->member2_name = $request['member2_name'];
        $team->member2_email = $request['member2_email'];
        $team->member2_phone = $request['member2_phone'];
        if($request->hasFile('id_leader') && $request->file('id_leader')->isValid()) {
           $destinationPath = 'public/identity_scans';
           $extension = $request->id_leader->extension();
           $fileName = date('YmdHms').'_'.Auth::user()->id .'_leader.'.$extension;
           $request->id_leader->storeAs($destinationPath, $fileName);
           $team->leader_identity = $fileName;
        }
        if($request->hasFile('id_member1') && $request->file('id_member1')->isValid()) {
           $destinationPath = 'public/identity_scans';
           $extension = $request->id_member1->extension();
           $fileName = date('YmdHms').'_'.Auth::user()->id .'_member1.'.$extension;
           $request->id_member1->storeAs($destinationPath, $fileName);
           $team->member1_identity = $fileName;
        }
        if($request->hasFile('id_member2') && $request->file('id_member2')->isValid()) {
           $destinationPath = 'public/identity_scans';
           $extension = $request->id_member2->extension();
           $fileName = date('YmdHms').'_'.Auth::user()->id .'_member2.'.$extension;
           $request->id_member2->storeAs($destinationPath, $fileName);
           $team->member2_identity = $fileName;
        }
        $team->save();

        Session::flash('message', 'Your team has edited!');
        return redirect('dashboard/team');
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
