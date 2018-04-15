<?php

namespace App\Http\Controllers;

use Request;
use App\Services;
use App\Portofolio;
use App\Abauts;
use App\Teams;
use App\Message;
use App\Http\Requests\MessageRequest;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $servicii = Services::orderBy('id','asc')->get();
        $portofolii = Portofolio::orderBy('id','asc')->get();
        $despre = Abauts::orderBy('nr','asc')->get();
        $team = Teams::orderBy('nr','asc')->get();
        
        return view('layouts.home', compact('servicii', 'portofolii', 'despre', 'team'));
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
    public function store(MessageRequest $request)
    {
        $input = Request::all();
        Message::create($input);

        return redirect('/')->with('success','Mesaj expediat cu succes!');
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
