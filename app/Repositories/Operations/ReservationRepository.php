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
        $reservation->target_date = Carbon::now();
        $reservation->save();
        return $reservation;
    }
}
