<?php

namespace App\Repositories;

use Illuminate\Encryption\Encrypter;

abstract class BaseCryptRepository extends BaseRepository
{
    /**
     * Devolve os campos  que devem
     * ser encriptografados
     *
     * @return array
     */
    abstract public function getEncryptable();

    /**
     * Criptografa os dados
     *
     * @param  array $data
     * @return array
     */
    public function encrypt(array $data)
    {
        if (!isset($data['secret'])) {
            return $data;
        }

        $key       = md5($data['secret'] . '-' . Config::get('app.key'));
        $cipher    = Config::get('app.cipher');
        $encrypter = new Encrypter($key, $cipher);

        foreach ($data as $key => $value) {
            if (in_array($key, $this->getEncryptable())) {
                $data[$key] = $encrypter->encrypt($value);
            }
        }

        return $data;
    }

    /**
     * Descriptografa os dados
     *
     * @param  array $data
     * @return array
     */
    public function decrypt(array $data)
    {
        if (!isset($data['secret'])) {
            return $data;
        }

        $key       = md5($data['secret'] . '-' . Config::get('app.key'));
        $cipher    = Config::get('app.cipher');
        $encrypter = new Encrypter($key, $cipher);

        foreach ($data as $key => $value) {
            if (in_array($key, $this->getEncryptable())) {
                $data[$key] = $encrypter->decrypt($value);
            }
        }

        return $data;
    }

    /**
     * Pega todos os registros
     *
     * @return Illuminate\Database\Eloquent\Collection
     */
    public function all()
    {
        return $this->model
            ->where('user_id', Auth::user()->id)
            ->all();
    }

    /**
     * Devolve um item descriptografado baseado no id :id
     *
     * @param  integer $id
     * @return Illuminate\Database\Eloquent\Model
     */
    public function getDecrypt($id)
    {
        return $this->decrypt($this->get($id));
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
            ->where('user_id', Auth::user()->id)
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
        $data = $this->encrypt($data);

        return parent::store($data);
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
        $data = $this->encrypt($data);

        return $this->model
            ->where('id', $id)
            ->where('user_id', Auth::user()->id)
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
            ->where('user_id', Auth::user()->id)
            ->delete();
    }
}
