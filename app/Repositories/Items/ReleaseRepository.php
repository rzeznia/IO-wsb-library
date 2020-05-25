<?php

namespace App\Repositories\Items;

use App\Interfaces\Items\ReleaseInterface;
use App\Models\Release;
use App\Repositories\BaseRepository;
use Illuminate\Support\Collection;

class ReleaseRepository extends BaseRepository implements ReleaseInterface
{

   /**
    * UserRepository constructor.
    *
    * @param User $model
    */
   public function __construct(Release $model)
   {
       parent::__construct($model);
   }

   /**
    * @return Collection
    */

}
