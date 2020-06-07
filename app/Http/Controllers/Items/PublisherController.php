<?php

namespace App\Http\Controllers\Items;
use App\Http\Controllers\Controller;
use App\Http\Requests\PublisherRequest;
use App\Interfaces\Items\PublisherInterface;
use Illuminate\Http\Request;

class PublisherController extends Controller
{
    private $publisher_interface;

    public function __construct(PublisherInterface $publisher_interface)
    {
        $this->middleware('auth');
        $this->publisher_interface = $publisher_interface;
    }

    public function index(){
        $publishers = $this->publisher_interface->all();
        // dd($publishers);
        return view('contents.publisher.index', compact('publishers'));
    }

    public function add(){
        return view('contents.publisher.add');
    }

    public function store(PublisherRequest $req){
        // dd($req);
        $data = $req->validated();
        if(!$this->publisher_interface->checkIsPublisherExists($data)){
            $this->publisher_interface->create($data);
            return redirect()->route('publisher.index')->withSuccess(['Author created successfully']);
        }
        else{
            return redirect()->route('publisher.index')->withErrors(['Author already exists']);
        }
    }

    public function edit($id){
        $publisher = $this->publisher_interface->find($id);
        if($publisher)
            return view('contents.publisher.edit', compact('publisher', 'id'));
        else
            return redirect()->route('publisher.index')->withErrors(['Unknown publisher!']);
    }

    public function save(PublisherRequest $req, $id){
        $data = $req->validated();
        if(!$this->publisher_interface->checkIsPublisherExists($data)){
            $this->publisher_interface->update($data, $id);
            return redirect()->route('publisher.index')->withSuccess(['Publisher edited successfully']);
        }
        else{
            return redirect()->route('publisher.index')->withErrors(['Publisher already exists']);
        }
    }
}

