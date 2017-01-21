<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Custom class
use App\User;
use App\Gallery;
use Session;
use Illuminate\Support\Facades\Auth;

class AdminGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallery = Gallery::all();
        return View('admin.gallery.index')->with('gallery', $gallery);   
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
            'text' => 'required',
            'photo' => 'required|image'
        ]);

        $gallery = new Gallery;
        $gallery->text = $request->text;
        if($request->hasFile('photo') && $request->file('photo')->isValid()) {
           $destinationPath = 'public/gallery';
           $extension = $request->photo->extension();
           $fileName = date('YmdHms').'_'.Auth::user()->id.'.'.$extension;
           $request->photo->storeAs($destinationPath, $fileName);
           $gallery->path = $fileName;
        }
        $gallery->save();

        Session::flash('message', 'Berhasil mengupload gambar.');
        return redirect('adminvocomfest17/gallery');
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

    public function publish($id)
    {
        $gallery = Gallery::find($id);
        $gallery->status = 1;
        $gallery->save();

        Session::flash('message', 'Berhasil mempublish gambar.');
        return redirect('adminvocomfest17/gallery');
    }

    public function unpublish($id)
    {
        $gallery = Gallery::find($id);
        $gallery->status = 0;
        $gallery->save();

        Session::flash('message', 'Berhasil mengunpublish gambar.');
        return redirect('adminvocomfest17/gallery');
    }
}
