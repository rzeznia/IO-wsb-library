<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use App\Interfaces\User\UserInterface;
use App\User;

class UserController extends Controller
{
    private $user_interface;

    public function __construct(UserInterface $user_interface)
    {
        $this->middleware('auth');
        $this->user_interface = $user_interface;
    }

    function index(){
        $users = $this->user_interface->all();
        return view('contents.user.index', compact('users'));
    }
}

