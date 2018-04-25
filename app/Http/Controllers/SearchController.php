<?php

namespace App\Http\Controllers;

use Request;
use App\Services;
use App\Portofolio;
use App\Teams;
use Laravel\Scout\Searchable;

class SearchController extends Controller
{
    public function search(Request $request){
        $query = Request::get('query');
        if($query == ''){
            return view('users.search', compact('query'));
        }else{
           $services = Services::where('title', 'like', '%'.$query.'%')->get();
           $portofoliu = Portofolio::where('name', 'like', '%'.$query.'%')->get();
           $teams = Teams::where('name', 'like', '%'.$query.'%')->get();

            return view('users.search', compact('services', 'query', 'portofoliu', 'teams'));
        }
    }

    public function searchen(Request $request){
        $query = Request::get('query');
        if($query == ''){
            return view('users.en.search', compact('query'));
        }else{
           $services = Services::where('title', 'like', '%'.$query.'%')->get();
           $portofoliu = Portofolio::where('name', 'like', '%'.$query.'%')->get();
           $teams = Teams::where('name', 'like', '%'.$query.'%')->get();

            return view('users.en.search', compact('services', 'query', 'portofoliu', 'teams'));
        }
    }
}
