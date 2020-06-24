<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Interfaces\Items\ReleaseInterface;
use App\Repositories\Items\PieceRepository;

class BookController extends Controller
{
    protected $release_interface;

    public function __construct(ReleaseInterface $release_interface)
    {
        $this->middleware('auth');
        $this->release_interface = $release_interface;
    }

    function index(){
        $books = $this->release_interface->getAllData();
        // dd($books);
        return view('contents.book.index', compact('books'));
    }
}

