<?php

namespace App\Http\Controllers\Items;
use App\Http\Controllers\Controller;
use App\Interfaces\Items\PublisherInterface;

class PublisherController extends Controller
{
    private $publisher_interface;

    public function __construct(PublisherInterface $publisher_interface)
    {
        $this->middleware('auth');
        $this->publisher_interface = $publisher_interface;
    }

    function index(){
        $publishers = $this->publisher_interface->all();
        // dd($publishers);
        return view('contents.publisher.index', compact('publishers'));
    }
}

