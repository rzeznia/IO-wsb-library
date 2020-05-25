<?php

namespace App\Repositories\Places;

use App\Interfaces\Places\RegalInterface;
use App\Models\Regal;
use App\Repositories\BaseRepository;
use Illuminate\Support\Collection;

class RegalRepository extends BaseRepository implements RegalInterface
{

   /**
    * UserRepository constructor.
    *
    * @param User $model
    */
   public function __construct(Regal $model)
   {
       parent::__construct($model);
   }

   /**
    * @return Collection
    */

}
