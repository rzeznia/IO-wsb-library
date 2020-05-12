<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Auth\ApiLoginController;

class DashController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    function index(){
        return view('contents.dash.index');
    }
}
