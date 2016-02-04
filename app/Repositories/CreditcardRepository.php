<?php

namespace App\Repositories;

use App\Creditcard;

class CreditcardRepository extends BaseCryptRepository
{
    protected $repo;

    /**
     * Campos que serão criptografados
     *
     * @var array
     */
    protected $encryptable = [
        'cvv',
        'password',
        'data_crypt',
    ];

    /**
     * Model de creditcard
     *
     * @return string
     */
    public function model()
    {
        return Creditcard::class;
    }

    /**
     * Devolve os campos que serão criptografados
     *
     * @return array
     */
    public function getEncryptable()
    {
        return $this->encryptable;
    }
}
