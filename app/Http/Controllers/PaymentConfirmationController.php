<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Custom class
use App\User;
use App\PaymentConfirmation;
use Session;
use Illuminate\Support\Facades\Auth;

class PaymentConfirmationController extends Controller
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
            'proof' => 'required|image'
        ]);

        $paymentconfirmation = new PaymentConfirmation;
        $paymentconfirmation->user_id = Auth::user()->id;
        $paymentconfirmation->description = $request->description;
        if($request->hasFile('proof') && $request->file('proof')->isValid()) {
           $destinationPath = 'public/payment_proofs';
           $extension = $request->proof->extension();
           $fileName = date('YmdHms').'_'.Auth::user()->id.'.'.$extension;
           $request->proof->storeAs($destinationPath, $fileName);
           $paymentconfirmation->proof = $fileName;
        }
        $paymentconfirmation->save();

        Session::flash('message', 'Konfirmasi pembayaran anda telah berhasil dikirimkan! Silahkan menunggu verifikasi dari panitia.');
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
