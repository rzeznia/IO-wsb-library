<?php

namespace App\Http\Controllers\Admin\Items;
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
        return view('contents.admin.author.index', compact('authors'));
    }

    public function add(){
        return view('contents.admin.author.add');
    }

    public function store(AuthorRequest $req){
        $data = $req->validated();
        if(!$this->author_interface->checkIsAuthorExists($data)){
            $this->author_interface->create($data);
            return redirect()->route('admin.author.index')->withSuccess(['Author created successfully']);
        }
        else{
            return redirect()->route('admin.author.index')->withErrors(['Author already exists']);
        }
    }

    public function edit($id){
        $author = $this->author_interface->find($id);
        if($author)
            return view('contents.admin.author.edit', compact('author', 'id'));
        else
            return redirect()->route('admin.title.index')->withErrors(['Unknown author!']);
    }

    public function save(AuthorRequest $req, $id){
        $data = $req->validated();
        if(!$this->author_interface->checkIsAuthorExists($data)){
            $this->author_interface->update($data, $id);
            return redirect()->route('admin.author.index')->withSuccess(['Author edited successfully']);
        }
        else{
            return redirect()->route('admin.author.index')->withErrors(['Author already exists']);
        }
    }
}

