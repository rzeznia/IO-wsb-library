<?php

namespace App\Repositories\Places;

use App\Interfaces\Places\LocalizationInterface;
use App\Models\Localization;
use App\Repositories\BaseRepository;
use Illuminate\Support\Collection;

class LocalizationRepository extends BaseRepository implements LocalizationInterface
{

   /**
    * UserRepository constructor.
    *
    * @param User $model
    */
   public function __construct(Localization $model)
   {
       parent::__construct($model);
   }

   /**
    * @return Collection
    */

}
