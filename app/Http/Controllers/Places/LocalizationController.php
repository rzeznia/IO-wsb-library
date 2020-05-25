<?php

namespace App\Http\Controllers\Places;
use App\Http\Controllers\Controller;
use App\Interfaces\Places\LocalizationInterface;

class LocalizationController extends Controller
{
    private $localization_interface;

    public function __construct(LocalizationInterface $localization_interface)
    {
        $this->middleware('auth');
        $this->localization_interface = $localization_interface;
    }

    function index(){
        $locals = $this->localization_interface->all();
        dd($locals);
        // return view('contents.user.index', compact('users'));
    }
}

