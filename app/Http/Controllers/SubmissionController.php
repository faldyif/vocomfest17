<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Custom class
use App\User;
use App\Submission;
use Session;
use Illuminate\Support\Facades\Auth;

class SubmissionController extends Controller
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
        $this->validate($request, [
            'path_url' => 'required',
        ]);

        $user = User::find(Auth::user()->id);
        $type = 0;

        if($user->role_id == 2) {
            if($user->team->progress == 2) {
                $type = 1; // web
            }
        } else {
            if($user->team->progress == 2) {
                $type = 2; // proposal
            } else if ($user->team->progress == 3) {
                $type = 3; // aplikasi
            }
        }

        $submission = new Submission;
        $submission->user_id = Auth::user()->id;
        $submission->type = $type;
        $submission->path_url = $request->path_url;
        $submission->save();

        Session::flash('message', 'Your submission has sent!');
        return redirect('dashboard');
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
