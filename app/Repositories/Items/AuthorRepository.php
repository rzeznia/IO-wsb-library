<?php

namespace App\Repositories\Items;

use App\Interfaces\Items\AuthorInterface;
use App\Models\Author;
use App\Repositories\BaseRepository;
use Illuminate\Support\Collection;
use PDO;

class AuthorRepository extends BaseRepository implements AuthorInterface
{

   /**
    * UserRepository constructor.
    *
    * @param User $model
    */
   public function __construct(Author $model)
   {
       parent::__construct($model);
   }

   public function checkIsAuthorExists(array $data): bool{
        $keys = ['name', 'surname', 'country'];
        foreach($keys as $value){
            if(!array_key_exists($value, $data))
                return false;
        }
        $res = $this->checkIsRecordExists($data);
        if(!$res){
            return false;
        }
        return true;
    }
}
