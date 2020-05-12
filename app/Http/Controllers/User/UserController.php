<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    function index(){
        $users = User::get();
        return view('contents.user.index', compact('users'));
    }
}

