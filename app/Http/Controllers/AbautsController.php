<?php

namespace App\Http\Controllers;

use Request;
use App\Message;
use App\Abauts;
use Illuminate\Support\Facades\Auth;

class AbautsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::check()) {
            $istoric = Abauts::get();
            $numar = $istoric->count();
            $numar ++;
            $liveMessage = Message::orderBy('id', 'desc')->limit(3)->get();
            return view('admin.meniu.abaut', compact('istoric', 'numar', 'liveMessage'));
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
    public function store(\App\Http\Requests\CreateAbautsRequest $request)
    {
        $input = Request::all();
        $path = '';
        $file = $request->file('image');
        $fileName = $file->getClientOriginalName();
        $path = 'img/about';
        $file = $file->move($path, $fileName);
        $input['image'] = $fileName;
        $n = $input['nr'];
        if($n % 2 == 0){
            $input['class'] = 'timeline-inverted';
        }else{
            $input['class'] = '';
        }
        
        Abauts::create($input);
        return redirect('admin/despre')->with('success','Istoric adăugat cu succes!');
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
            $abaut = Abauts::findOrFail($id);    
            $liveMessage = Message::orderBy('id', 'desc')->limit(3)->get();
            return view('admin.meniu.editabaut', compact('abaut', 'liveMessage'));
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
    public function update(\App\Http\Requests\CreateAbautsRequest $request, $id)
    {
        if (Auth::check()) {
            $abauts = Abauts::findOrFail($id); 
            $abauts->update($request->all());
            return redirect('admin/despre')->with('success','Istoric editat cu succes!');
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
    public function destroy($id)
    {
        if (Auth::check()) {
            Abauts::findOrFail($id)->delete();
            return redirect('admin/despre')->with('success','Istoric șters cu succes!');
        }
        else{
            return redirect('admin');
        }
    }
}
