<?php

namespace App\Http\Controllers\Items;
use App\Http\Controllers\Controller;
use App\Http\Requests\TitleRequest;
use App\Interfaces\Items\AuthorInterface;
use App\Interfaces\Items\TitleInterface;

class TitleController extends Controller
{
    private $title_interface;
    private $author_interface;

    public function __construct(TitleInterface $title_interface, AuthorInterface $author_interface)
    {
        $this->middleware('auth');
        $this->title_interface = $title_interface;
        $this->author_interface = $author_interface;
    }

    function index(){
        $titles = $this->title_interface->all()->load('author');
        // dd($titles);
        return view('contents.title.index', compact('titles'));
    }

    public function add(){
        $authors = $this->author_interface->all();
        return view('contents.title.add', compact('authors'));
    }

    public function store(TitleRequest $req){
        $data = $req->validated();
        if(!$this->title_interface->checkIsTitleExists($data)){
            $this->title_interface->create($data);
            return redirect()->route('title.index')->withSuccess(['Title created successfully']);
        }
        else{
            return redirect()->route('title.index')->withErrors(['Title already exists']);
        }
    }

    public function edit($id){
        $title = $this->title_interface->find($id)->load('author');
        if($title)
            return view('contents.title.edit', compact('title', 'id'));
        else
            return redirect()->route('title.index')->withErrors(['Unknown title!']);
    }

    public function save(TitleRequest $req, $id){
        $data = $req->validated();
        if(!$this->title_interface->checkIsTitleExists($data)){
            $this->title_interface->update($data, $id);
            return redirect()->route('title.index')->withSuccess(['Title edited successfully']);
        }
        else{
            return redirect()->route('title.index')->withErrors(['Title already exists']);
        }
    }
}

