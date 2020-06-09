<?php

namespace App\Repositories\Operations;

use App\Interfaces\Operations\ReservationInterface;
use App\Models\Reservation;
use App\Repositories\BaseRepository;
use Illuminate\Support\Collection;

class ReservationRepository extends BaseRepository implements ReservationInterface
{

   /**
    * UserRepository constructor.
    *
    * @param User $model
    */
   public function __construct(Reservation $model)
   {
       parent::__construct($model);
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

}
