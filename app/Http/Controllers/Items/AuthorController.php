<?php

namespace App\Http\Controllers\Items;
use App\Http\Controllers\Controller;
use App\Interfaces\Items\AuthorInterface;

class AuthorController extends Controller
{
    private $author_interface;

    public function __construct(AuthorInterface $author_interface)
    {
        $this->middleware('auth');
        $this->author_interface = $author_interface;
    }

    function index(){
        $authors = $this->author_interface->all();
        // dd($authors);
        return view('contents.author.index', compact('authors'));
    }
}

