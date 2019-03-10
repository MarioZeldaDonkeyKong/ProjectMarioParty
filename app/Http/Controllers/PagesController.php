<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class PagesController extends Controller
{
    public function home() {

        return view('home')->with([
            /*Variable - Value*/
            'foo' => 'bar',
            'tasks' => ['some task']
        ]);
    }

    public function contact() {

        $users = User::all();


        return view('contact', compact('users'));
    }
}
