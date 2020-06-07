<?php

namespace App\Http\Controllers\Items;
use App\Http\Controllers\Controller;
use App\Http\Requests\AuthorRequest;
use App\Interfaces\Items\AuthorInterface;
use Illuminate\Http\Request;

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

    public function add(){
        return view('contents.author.add');
    }

    public function store(AuthorRequest $req){
        $data = $req->validated();
        if(!$this->author_interface->checkIsAuthorExists($data)){
            $this->author_interface->create($data);
            return redirect()->route('author.index')->withSuccess(['Author created successfully']);
        }
        else{
            return redirect()->route('author.index')->withErrors(['Author already exists']);
        }
    }
}

