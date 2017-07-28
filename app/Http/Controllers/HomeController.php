<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $user = new User;
$user->name = 'Johns';
$user->email = 'Joshns';
$user->emailss = 'Jossshns';
$user->save();
        $users = User::all();

        dd($users);
        //return view('home');
    }
}
