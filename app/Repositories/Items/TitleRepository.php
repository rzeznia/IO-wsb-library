<?php

namespace App\Repositories\Items;

use App\Interfaces\Items\TitleInterface;
use App\Models\Title;
use App\Repositories\BaseRepository;
use Illuminate\Support\Collection;

class TitleRepository extends BaseRepository implements TitleInterface
{

   /**
    * UserRepository constructor.
    *
    * @param User $model
    */
   public function __construct(Title $model)
   {
       parent::__construct($model);
   }

   /**
    * @return Collection
    */

}
