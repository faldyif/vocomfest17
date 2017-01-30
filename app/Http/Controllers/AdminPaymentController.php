<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Custom class
use App\User;
use App\PaymentConfirmation;
use Session;
use Illuminate\Support\Facades\Auth;

class AdminPaymentController extends Controller
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
        $payment = PaymentConfirmation::get();
        return View('admin.payment.index')->with('payment', $payment);
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
        $payment = PaymentConfirmation::find($id);
        $payment->delete();

        Session::flash('message', 'Berhasil menghapus bukti verifikasi!');
        return redirect('adminvocomfest17/payment');
    }

    public function confirm($id)
    {
        if(Auth::user()->role_id != 1) {
            return redirect('dashboard'); 
        }
        $user = User::find(PaymentConfirmation::find($id)->user_id);
        if($user->role_id == 4) {
            $user->team->hash = crypt($user->name . $user->created_at, 'vocomfest2017');
        }
        $user->team->progress = 2;
        $user->team->save();

        Session::flash('message', 'Berhasil memverifikasi pembayaran!');
        return redirect('adminvocomfest17/payment');
    }
}
