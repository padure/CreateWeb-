<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use App\Services;
use App\Portofolio;
use App\Teams;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $liveMessage = Message::orderBy('id', 'desc')->limit(3)->get();
        $nrMessage = Message::get()->count();
        $nrServices = Services::get()->count();
        $nrPortofolii = Portofolio::get()->count();
        $nrTeam = Teams::get()->count();
        $message = Message::orderBy('id','asc')->get();
        $lastMessage = Message::orderBy('id', 'desc')->limit(1)->get();
        return view('admin.index', compact('liveMessage', 'nrMessage', 'message', 'lastMessage', 'nrServices', 'nrPortofolii', 'nrTeam'));
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function myCaptcha()
    {
        return view('myCaptcha');
    }


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function myCaptchaPost(Request $request)
    {
        request()->validate([
            'email' => 'required|email',
            'password' => 'required',
            'captcha' => 'required|captcha'
        ],
        ['captcha.captcha'=>'Invalid captcha code.']);
        dd("You are here :) .");
    }


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function refreshCaptcha()
    {
        return response()->json(['captcha'=> captcha_img()]);
    }

}
