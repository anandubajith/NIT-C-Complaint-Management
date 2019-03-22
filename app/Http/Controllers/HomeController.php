<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Complaint;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $complaints = Complaint::all()->sortByDesc('id');
        return view('homepage', compact('complaints') );
    }
}
