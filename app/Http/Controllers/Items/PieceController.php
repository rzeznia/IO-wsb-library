<?php

namespace App\Http\Controllers\Items;
use App\Http\Controllers\Controller;
use App\Http\Requests\PieceRequest;
use App\Http\Requests\TitleRequest;
use App\Interfaces\Items\AuthorInterface;
use App\Interfaces\Items\PieceInterface;
use App\Interfaces\Items\ReleaseInterface;
use App\Interfaces\Items\TitleInterface;
use App\Interfaces\Places\LocalizationInterface;
use App\Repositories\Items\PieceRepository;
use Composer\Repository\Pear\ReleaseInfo;
use Illuminate\Http\Request;

class PieceController extends Controller
{
    private $piece_interface;
    private $release_interface;
    private $localization_interface;

    public function __construct(PieceInterface $piece_interface, ReleaseInterface $release_interface,
        LocalizationInterface $localization_interface)
    {
        $this->middleware('auth');
        $this->piece_interface = $piece_interface;
        $this->release_interface = $release_interface;
        $this->localization_interface = $localization_interface;
    }

    function index(){
        $pieces = $this->piece_interface->all()->load('release.title.author')->load('localization');
        // dd($pieces);
        return view('contents.piece.index', compact('pieces'));
    }

    public function add(){
        $releases = $this->release_interface->all();
        $localizations = $this->localization_interface->all();
        return view('contents.piece.add', compact('releases', 'localizations'));
    }

    public function store(PieceRequest $req){
        $data = $req->validated();
        $count = $data['piece_count'];
        unset($data['piece_count']);
        for($i = 1; $i <= $count; $i += 1){
            $this->piece_interface->create($data);
        }
        return redirect()->route('piece.index')->withSuccess(['Piece/s created successfully']);
    }

    public function edit($id){
        $piece = $this->piece_interface->find($id)->load('release.title.author')->load('localization');
        $releases = $this->release_interface->all();
        $localizations = $this->localization_interface->all();

        if($piece)
            return view('contents.piece.edit', compact('piece', 'id', 'releases', 'localizations'));
        else
            return redirect()->route('piece.index')->withErrors(['Unknown piece!']);
    }

    public function save(PieceRequest $req, $id){
        $data = $req->validated();
        unset($data['piece_count']);
        $this->piece_interface->update($data, $id);
        return redirect()->route('piece.index')->withSuccess(['Piece edited successfully']);
    }
}

