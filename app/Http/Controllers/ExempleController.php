<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Message;

class ExempleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        if (Auth::check()) {
            $liveMessage = Message::orderBy('id', 'desc')->limit(3)->get();
            return view('admin.login', compact('liveMessage'));
            }else{
                return redirect('login');
            }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function register()
    {
        if (Auth::check()) {
            $liveMessage = Message::orderBy('id', 'desc')->limit(3)->get();
            return view('admin.register', compact('liveMessage'));
            }else{
                return redirect('login');
            }
    }

    public function forgot()
    {
        if (Auth::check()) {
            $liveMessage = Message::orderBy('id', 'desc')->limit(3)->get();
            return view('admin.forgot', compact('liveMessage'));
            }else{
                return redirect('login');
            }
    }
    public function blank()
    {
        if (Auth::check()) {
            $liveMessage = Message::orderBy('id', 'desc')->limit(3)->get();
            return view('admin.blank', compact('liveMessage'));
            }else{
                return redirect('login');
            }
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
        //
    }
}
