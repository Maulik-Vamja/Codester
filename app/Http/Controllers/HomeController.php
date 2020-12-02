<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('welcome');
    }
    public function freeFiles()
    {
        return view('freefiles');
    }
    public function seller()
    {
        return view('seller');
    }
    public function upload()
    {
        return "hello";
    }
    public function affilate()
    {
        return view('affilate');
    }
    public function forum()
    {
        return view('forum');
    }
    public function collection()
    {
        return view('collection');
    }
}
