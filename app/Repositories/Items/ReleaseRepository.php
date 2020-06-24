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

    public function getFullReleases(): ?Collection
    {
        return Release::with('title.author')->with('publisher')->get();
    }

    public function getAllData(): ?Collection
    {
        return $this->model->with('title.author')->with('publisher')->whereHas('piece')->get();
    }

}
