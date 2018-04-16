<?php

namespace App\Http\Controllers;

use Request;
use Illuminate\Support\Facades\Auth;
use App\Teams;
use App\Message;
use App\Http\Requests\TeamRequest;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::check()) {
            $team = Teams::get();
            $numar = $team->count();
            $numar = $numar+1;
            $liveMessage = Message::orderBy('id', 'desc')->limit(3)->get();
            return view('admin.meniu.team', compact('team', 'numar', 'liveMessage'));
        }else{
            return redirect('admin');
        }
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
    public function store(TeamRequest $request)
    {
        $input = Request::all();
        $path = '';
        $file = $request->file('image');
        $fileName = $file->getClientOriginalName();
        $path = 'img/team';
        $file = $file->move($path, $fileName);
        $input['image'] = $fileName;
        Teams::create($input);

        return redirect('admin/team')->with('success','Membru adăugat cu succes!');
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
