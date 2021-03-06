<?php

namespace App\Repositories;

use App\Interfaces\EloquentBaseInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class BaseRepository implements EloquentBaseInterface
{
    /**
     * @var Model
     */
     protected $model;

    /**
     * BaseRepository constructor.
     *
     * @param Model $model
     */
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    /**
    * @param array $attributes
    *
    * @return Model
    */
    public function create(array $attributes): Model
    {
        return $this->model->create($attributes);
    }

    /**
    * @param $id
    * @return Model
    */
    public function find($id): ?Model
    {
        return $this->model->find($id);
    }

    public function all(): ?Collection
    {
        return $this->model->all();
    }

    public function update($data, $id): ?Model{
        $model = $this->model->find($id);
        $model->fill($data);
        $model->save();
        return $model;
    }

    public function checkIsRecordExists($data): bool
    {
        $res = $this->model->where(function($q) use ($data){
            foreach($data as $key => $value){
                $q->where($key, $value);
            }
        })->first();
        $bool = ($res) ? true : false;
        return $bool;
    }
}
