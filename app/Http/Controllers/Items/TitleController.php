<?php

namespace App\Http\Controllers\Items;
use App\Http\Controllers\Controller;
use App\Interfaces\Items\TitleInterface;

class TitleController extends Controller
{
    private $title_interface;

    public function __construct(TitleInterface $title_interface)
    {
        $this->middleware('auth');
        $this->title_interface = $title_interface;
    }

    function index(){
        $titles = $this->title_interface->all()->load('author');
        // dd($titles);
        return view('contents.title.index', compact('titles'));
    }
}

