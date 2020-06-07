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

   public function checkIsTitleExists(array $data): bool
   {
        $res = $this->model->where('title', $data['title'])
            ->where('author_id', $data['author_id'])
            ->first();
        $bool = ($res) ? true : false;
        return $bool;

   }

}
