<?php

namespace App\Repositories\Operations;

use App\Interfaces\Operations\HireInterface;
use App\Interfaces\Operations\ReservationInterface;
use App\Models\Hire;
use App\Repositories\BaseRepository;
use Carbon\Carbon;
use Illuminate\Support\Collection;

class HireRepository extends BaseRepository implements HireInterface
{

   /**
    * UserRepository constructor.
    *
    * @param User $model
    */
    protected $hire_interface;

   public function __construct(Hire $model)
   {
       parent::__construct($model);
   }

   /**
    * @return Collection
    */

    public function getAllActiveHires()
    {
        return $this->model->whereNull('end_date')->get();
    }

    public function returnBook(int $id)
    {
        $hire = $this->find($id);
        $hire->end_date = Carbon::now();
        $hire->save();
    }
}
