<?php

namespace App\Repositories\Items;

use App\Interfaces\Items\PublisherInterface;
use App\Models\Publisher;
use App\Repositories\BaseRepository;
use Illuminate\Support\Collection;

class PublisherRepository extends BaseRepository implements PublisherInterface
{

   /**
    * UserRepository constructor.
    *
    * @param User $model
    */
   public function __construct(Publisher $model)
   {
       parent::__construct($model);
   }

   public function checkIsPublisherExists($data): bool
   {
        $res = $this->model->where('name', $data['name'])->first();
        $bool = ($res) ? true : false;
        return $bool;
   }
}
