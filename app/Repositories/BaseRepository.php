<?php

namespace App\Repositories;

use Exception;
use Illuminate\Container\Container as App;
use Illuminate\Database\Eloquent\Model;

abstract class BaseRepository
{
    /**
     * @var Illuminate\Database\Eloquent\Model
     */
    protected $model;

    /**
     * @var Illuminate\Container\Container
     */
    private $app;

    /**
     * Devolve a model que será criada
     *
     * @return string
     */
    abstract public function model();

    public function __construct(App $app)
    {
        $this->app = $app;
        $this->makeModel();
    }

    /**
     * Cria a model
     *
     * @return Illuminate\Database\Eloquent\Model
     */
    public function makeModel()
    {
        $model = $this->app->make($this->model());

        if (!$model instanceof Model) {
            throw new Exception("Class {$this->model()} must be an instance of Illuminate\\Database\\Eloquent\\Model");
        }

        return $this->model = $model;
    }

    /**
     * Pega todos os registros
     *
     * @return Illuminate\Database\Eloquent\Collection
     */
    public function all()
    {
        return $this->model
            ->all();
    }

    /**
     * Devolve um item baseado no id :id
     *
     * @param  integer $id
     * @return Illuminate\Database\Eloquent\Model
     */
    public function get($id)
    {
        return $this->model
            ->where('id', $id)
            ->first();
    }

    /**
     * Adiciona um novo item
     *
     * @param  array  $data
     * @return Illuminate\Database\Eloquent\Model
     */
    public function store(array $data)
    {
        return $this->model->save($data);
    }

    /**
     * Atualiza um item com os dados :data
     * baseado no id :id
     *
     * @param  array  $data
     * @param  int $id
     * @return Illuminate\Database\Eloquent\Model
     */
    public function update(array $data, $id)
    {
        return $this->model
            ->where('id', $id)
            ->update($data);
    }

    /**
     * Apaga um item baseado no id :id
     * @param  int $id
     * @return int
     */
    public function delete($id)
    {
        return $this->model
            ->where('id', $id)
            ->delete();
    }
}
