<?php

namespace App\Http\Controllers\Items;
use App\Http\Controllers\Controller;
use App\Interfaces\Items\ReleaseInterface;

class ReleaseController extends Controller
{
    private $release_interface;

    public function __construct(ReleaseInterface $release_interface)
    {
        $this->middleware('auth');
        $this->release_interface = $release_interface;
    }

    function index(){
        $releases = $this->release_interface->getFullReleases();
        // dd($releases);
        return view('contents.release.index', compact('releases'));
    }
}

