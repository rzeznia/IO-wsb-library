<?php

namespace App\Http\Controllers\Admin\Operations;
use App\Http\Controllers\Controller;
use App\Interfaces\Operations\HireInterface;
use App\Interfaces\Operations\ReservationInterface;
use Illuminate\Http\Request;

class HireController extends Controller
{
    private $hire_interface;

    public function __construct(HireInterface $hire_interface)
    {
        $this->middleware('auth');
        $this->hire_interface = $hire_interface;
    }

    public function index(){
        $hires = $this->hire_interface->getAllActiveHires()->load(['reservation.piece.release.title', 'reservation.user']);
        return view('contents.admin.hire.index', compact('hires'));
    }

    public function return($id){
        $hire = $this->hire_interface->find($id);
        if($hire){
            $this->hire_interface->returnBook($id);
            return redirect()->route('admin.hire.index')->withSuccess('Book returned');
        }else{
            return redirect()->route('admin.hire.index')->withErrors(['Hire not found']);
        }
    }
}