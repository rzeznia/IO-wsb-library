<?php

namespace App\Http\Controllers\Places;
use App\Http\Controllers\Controller;
use App\Interfaces\Places\RegalInterface;

class RegalController extends Controller
{
    private $regal_interface;

    public function __construct(RegalInterface $regal_interface)
    {
        $this->middleware('auth');
        $this->regal_interface = $regal_interface;
    }

    function index(){
        $regals = $this->regal_interface->all();
        dd($regals);
        // return view('contents.user.index', compact('users'));
    }
}

