<?php

namespace App\Http\Controllers;

use Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Input;
use App\Portofolio;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PortofoliuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::check()) {
            $portofolii = Portofolio::get();
            return view('admin.meniu.portofoliu', compact('portofolii'));
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
    public function store(\App\Http\Requests\CreatePortofoliuRequest $request)
    {
        $input = Request::all();
        $path = '';
        $file = $request->file('url');
        $fileTh = $request->file('thumbnail');
        $fileName = $file->getClientOriginalName();
        $fileNameTh = $fileTh->getClientOriginalName();
        $path = 'img/portfolio';
        $file = $file->move($path, $fileName);
        $fileTh = $fileTh->move($path, $fileNameTh);
        Portofolio::create($input);
        return redirect('admin/portofoliu');
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
