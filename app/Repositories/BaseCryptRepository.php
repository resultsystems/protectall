<?php

namespace App\Repositories;

use Illuminate\Container\Container as App;
use Illuminate\Database\Eloquent\Model;

abstract class BaseCryptRepository extends BaseRepository
{
    public function all()
    {
        return $this->model->all();
    }

    public function get($id)
    {
        return $this->model
            ->where('id', $id)
            ->where('user_id', Auth::user()->id)
            ->first();
    }

    public function store(array $data)
    {
        return $this->model->save($data);
    }

    public function update(array $data, $id)
    {
        return $this->model
            ->where('id', $id)
            ->where('user_id', Auth::user()->id)
            ->update($data);
    }

    public function delete($id)
    {
        return $this->model
            ->where('id', $id)
            ->where('user_id', Auth::user()->id)
            ->delete();
    }
}
