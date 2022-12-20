<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function index()
    {
        $users = User::all();
        // dd($users);
        return view('account.users')->with(compact('users'));
    }
}
