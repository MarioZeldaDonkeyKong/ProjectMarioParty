<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class DashboardController extends Controller
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user_id = auth()->user()->id;

        $user = User::find($user_id);

        //var_dump($user->accountNumbers()->get()[(0)]->account_number);
        // zet ze bij verkeerde id

        return view('dashboard')->with('account_numbers', $user->accountNumbers()->get());
    }
}
