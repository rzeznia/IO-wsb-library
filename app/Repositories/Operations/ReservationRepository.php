<?php

namespace App\Repositories\Operations;

use App\Interfaces\Operations\HireInterface;
use App\Interfaces\Operations\ReservationInterface;
use App\Models\Reservation;
use App\Repositories\BaseRepository;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class ReservationRepository extends BaseRepository implements ReservationInterface
{

   /**
    * UserRepository constructor.
    *
    * @param User $model
    */
    protected $hire_interface;

   public function __construct(Reservation $model, HireInterface $hire_interface)
   {
       parent::__construct($model);
       $this->hire_interface = $hire_interface;
   }

   /**
    * @return Collection
    */

    public function getUserReservations(int $user_id): ?Collection
    {
        return $this->model->where('user_id', $user_id)->get()->load('piece.release.title');
    }

    public function getUserReservedTitles(int $user_id): array
    {
        $reservations = $this->getUserReservations($user_id);
        $titles = array();
        if(count($reservations) > 0){
            foreach($reservations as $reservation){
                $title_id = $reservation->piece->release->title->id;
                if(!in_array($title_id, $titles)){
                    array_push($titles, $title_id);
                }
            }
        }
        return $titles;
    }

    public function getAllReservations($valid = true): ?Collection{
        if($valid == true){
            return $this->model->where('target_date', '>=', Carbon::now() )
            ->doesntHave('hire')->get();
        }else{
            return $this->model->get();
        }
    }

    public function acceptReservation(int $id): ?Model
    {
        $reservation = $this->find($id);
        $hire_data['reservation_id'] = $id;
        $hire_data['piece_id'] = $reservation->piece_id;
        $hire_data['start_date'] = Carbon::now();
        return $this->hire_interface->create($hire_data);
    }

    public function rejectReservation(int $id): ?Model
    {
        $reservation = $this->find($id);
        $reservation->target_date = Carbon::now()->subHour();
        $reservation->save();
        return $reservation;
    }

    public function checkIsUserAlreadyReservedBook(int $user_id, int $release_id): bool
    {
        $data = $this->model->where('user_id', $user_id)->with('piece.release')->get();
        foreach($data as $reservation){
            if($reservation->piece->release_id == $release_id)
                return true;
        }
        return false;
    }

    public function checkIsUserAlreadyBorrowedBook(int $reservation_id): bool
    {
        $data = $this->hire_interface->model->where('reservation_id', $reservation_id)->first();
        if($data)
           return true;
        return false;
    }

    public function getReservationId(int $user_id, int $release_id): int
    {
        $data = $this->model->where('user_id', $user_id)->with('piece.release')->get();
        foreach($data as $reservation){
            if($reservation->piece->release_id = $release_id)
                return $reservation->id;
        }
    }

    public function markHires(Collection $reservations): Collection
    {
        foreach($reservations as $reservation){
            if($this->checkIsUserAlreadyBorrowedBook($reservation->id)){
                $reservation->borrowed = true;
            }
        }
        return $reservations;
    }
}
