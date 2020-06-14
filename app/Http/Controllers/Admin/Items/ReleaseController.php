<?php

namespace App\Http\Controllers\Admin\Items;
use App\Http\Controllers\Controller;
use App\Http\Requests\ReleaseRequest;
use App\Interfaces\Items\PublisherInterface;
use App\Interfaces\Items\ReleaseInterface;
use App\Interfaces\Items\TitleInterface;
use Illuminate\Http\Request;

class ReleaseController extends Controller
{
    private $release_interface;
    private $title_interface;
    private $publisher_interface;

    public function __construct(ReleaseInterface $release_interface, TitleInterface $title_interface,
        PublisherInterface $publisher_interface)
    {
        $this->middleware('auth');
        $this->release_interface = $release_interface;
        $this->title_interface = $title_interface;
        $this->publisher_interface = $publisher_interface;
    }

    function index(){
        $releases = $this->release_interface->getFullReleases();
        // dd($releases);
        return view('contents.admin.release.index', compact('releases'));
    }

    public function add(){
        $titles = $this->title_interface->all()->load('author');
        $publishers = $this->publisher_interface->all();
        return view('contents.admin.release.add', compact('titles', 'publishers'));
    }

    public function store(ReleaseRequest $req){
        $data = $req->validated();
        if(!$this->release_interface->checkIsRecordExists($data)){
            $this->release_interface->create($data);
            return redirect()->route('admin.release.index')->withSuccess(['Release created successfully']);
        }
        else{
            return redirect()->route('admin.release.index')->withErrors(['Release already exists']);
        }
    }

    public function edit($id){
        $release = $this->release_interface->find($id)->load('title')->load('publisher');
        $titles = $this->title_interface->all()->load('author');
        $publishers = $this->publisher_interface->all();

        if($release)
            return view('contents.admin.release.edit', compact('release', 'id', 'titles', 'publishers'));
        else
            return redirect()->route('admin.release.index')->withErrors(['Unknown release!']);
    }

    public function save(ReleaseRequest $req, $id){
        $data = $req->validated();
        if(!$this->release_interface->checkIsRecordExists($data)){
            $this->release_interface->update($data, $id);
            return redirect()->route('admin.release.index')->withSuccess(['Release edited successfully']);
        }
        else{
            return redirect()->route('admin.release.index')->withErrors(['Release already exists']);
        }
    }
}

