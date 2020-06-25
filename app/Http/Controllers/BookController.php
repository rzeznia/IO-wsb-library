<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Interfaces\Items\PieceInterface;
use App\Interfaces\Items\ReleaseInterface;
use App\Interfaces\Operations\ReservationInterface;
use App\Repositories\Items\PieceRepository;
use Carbon\Carbon;

class BookController extends Controller
{
    protected $release_interface;
    protected $piece_interface;
    protected $reservation_interface;

    public function __construct(ReleaseInterface $release_interface, PieceInterface $piece_interface, ReservationInterface $reservation_interface)
    {
        $this->middleware('auth');
        $this->release_interface = $release_interface;
        $this->piece_interface = $piece_interface;
        $this->reservation_interface = $reservation_interface;
    }

    public function index(){
        $books = $this->release_interface->getAllData();
        return view('contents.book.index', compact('books'));
    }

    public function make_reservation($id){
        $release = $this->release_interface->find($id);
        if(!$this->reservation_interface->checkIsUserAlreadyReservedBook(\Auth::user()->id, $release->id)){
            //find free
            $free_books = $this->piece_interface->findFreePieces($release->id);
            if(count($free_books) > 1){
                $data['user_id'] = \Auth::user()->id;
                $data['piece_id'] = $free_books[0]->id;
                $data['target_date'] = Carbon::now()->addWeeks(2)->format('Y-m-d H:i:s');
                $reservation = $this->release_interface->makeReservation($data);
                return redirect()->route('book.index');
            }
        }else{
            return redirect()->route('book.index');
        }
    }
}

