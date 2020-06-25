<?php

namespace App\Repositories\Items;

use App\Interfaces\Items\ReleaseInterface;
use App\Interfaces\Operations\ReservationInterface;
use App\Models\Release;
use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class ReleaseRepository extends BaseRepository implements ReleaseInterface
{

   /**
    * UserRepository constructor.
    *
    * @param User $model
    */
    public $reservation_interface;
   public function __construct(Release $model, ReservationInterface $reservation_interface)
   {
       parent::__construct($model);
       $this->reservation_interface = $reservation_interface;
   }

   /**
    * @return Collection
    */

    public function getFullReleases(): ?Collection
    {
        return Release::with('title.author')->with('publisher')->get();
    }

    public function getAllData(): ?Collection
    {
        $data = $this->model->with('title.author')->with('publisher')->whereHas('piece')->with('piece.reservation')->withCOunt('piece')->get();
        foreach($data as $record){
            $freecount = 0;
            if($this->reservation_interface->checkIsUserAlreadyReservedBook(\Auth::user()->id, $record->id)){
                $record->reserved = true;
                $reservation_id = $this->reservation_interface->getReservationId(\Auth::user()->id, $record->id);
                if($this->reservation_interface->checkIsUserAlreadyBorrowedBook($reservation_id))
                    $record->borrowed = true;
            }else{
                $data->reject($record);
            }
            foreach($record->piece as $pc){
                if(!$pc->reservation){
                    $freecount += 1;
                }
            }
            $record->free_count = $freecount;
        }
        return $data;
    }
}
