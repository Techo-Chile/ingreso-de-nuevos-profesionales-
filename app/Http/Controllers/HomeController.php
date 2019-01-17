<?php

namespace App\Http\Controllers;

use App\Mail\AvisoIngreso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {


        return view('welcome');
    }
    public function store(Request $request)
    {
        Mail::to('oscarent2@gmail.com')->send(new AvisoIngreso());
        return \GuzzleHttp\json_encode($request->all());

    }
}
