<?php

namespace App\Http\Controllers;
use App\Meniu;
use App\Services;
use Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Message;

class MeniuController extends Controller
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
    public function destroy($id)
    {
        if (Auth::check()) {
            Services::findOrFail($id)->delete();
            return redirect('admin/servicii')->with('success','Serviciu șters cu succes!');
        }
        else{
            return redirect('admin');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(\App\Http\Requests\CreateServicesRequest $request)
    {
        $input = Request::all();
        Services::create($input);
        return redirect('admin/servicii')->with('success','Serviciu adăugat cu succes!');
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
        if (Auth::check()) {
            $serviciu = Services::findOrFail($id);    
            $liveMessage = Message::orderBy('id', 'desc')->limit(3)->get();
            return view('admin.meniu.editserviciu', compact('serviciu', 'liveMessage'));
            }
            else{
                return redirect('admin');
            }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(\App\Http\Requests\CreateServicesRequest $request, $id)
    {
        if (Auth::check()) {
            $serviciu = Services::findOrFail($id); 
            $serviciu->update($request->all());
            return redirect('admin/servicii')->with('success','Serviciu editat cu succes!');
            }
            else{
                return redirect('admin');
            }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function servicii()
    {
        if (Auth::check()) {
            $servicii = Services::get();
            $liveMessage = Message::orderBy('id', 'desc')->limit(3)->get();
            return view('admin.meniu.servicii', compact('servicii', 'liveMessage'));
            }else{
                return redirect('admin');
            }
    }
}
