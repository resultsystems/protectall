<?php

namespace App\Repositories;

use App\Username;

class UsernameRepository extends BaseCryptRepository
{
    protected $repo;

    /**
     * Campos que serão criptografados.
     *
     * @var array
     */
    protected $encryptable = [
        'password',
    ];

    /**
     * Model de Username.
     *
     * @return string
     */
    public function model()
    {
        return Username::class;
    }

    /**
     * Devolve os campos que serão criptografados.
     *
     * @return array
     */
    public function getEncryptable()
    {
        return $this->encryptable;
    }
}
