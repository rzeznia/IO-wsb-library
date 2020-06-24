<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class PanelController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    function index(){
        return view('contents.admin.title.index', compact('titles'));
    }
}

