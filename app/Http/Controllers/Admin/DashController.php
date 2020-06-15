<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Auth\ApiLoginController;
use App\Http\Controllers\Controller;

class DashController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    function index(){
        return view('contents.admin.dash.index');
    }
}
