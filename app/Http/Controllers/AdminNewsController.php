<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Custom class
use App\User;
use App\News;
use Session;
use Illuminate\Support\Facades\Auth;

class AdminNewsController extends Controller
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
        $news = News::all();
        return View('admin.news.index')->with('news', $news);
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
        return View('admin.news.create');
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
            'title' => 'required',
            'thumbnail' => 'required|image',
            'content' => 'required'
        ]);

        $news = new News;
        $news->title = $request->title;
        $news->content = $request->content;
        if($request->hasFile('thumbnail') && $request->file('thumbnail')->isValid()) {
           $destinationPath = 'public/news_thumbs';
           $extension = $request->thumbnail->extension();
           $fileName = date('YmdHms').'_'.Auth::user()->id.'.'.$extension;
           $request->thumbnail->storeAs($destinationPath, $fileName);
           $news->thumbnail = $fileName;
        }
        $news->save();

        Session::flash('message', 'Berita berhasil dipublish!');
        return redirect('adminvocomfest17/news');
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
        if(Auth::user()->role_id != 1) {
            return redirect('dashboard'); 
        }
        $news = News::find($id);
        return View('admin.news.edit')->with('news', $news);
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
        if(Auth::user()->role_id != 1) {
            return redirect('dashboard'); 
        }
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required'
        ]);

        $news = News::find($id);
        $news->title = $request->title;
        $news->content = $request->content;
        if($request->hasFile('thumbnail') && $request->file('thumbnail')->isValid()) {
           $destinationPath = 'public/news_thumbs';
           $extension = $request->thumbnail->extension();
           $fileName = date('YmdHms').'_'.Auth::user()->id.'.'.$extension;
           $request->thumbnail->storeAs($destinationPath, $fileName);
           $news->thumbnail = $fileName;
        }
        $news->save();

        Session::flash('message', 'Berita berhasil disunting!');
        return redirect('adminvocomfest17/news');
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
        $news = News::find($id);
        $news->delete();

        Session::flash('message', 'Berita berhasil dihapus!');
        return redirect('adminvocomfest17/news');
    }
}
