<?php

namespace App\Repositories;

use App\Text;

class TextRepository extends BaseCryptRepository
{
    protected $repo;

    /**
     * Campos que serão criptografados
     *
     * @var array
     */
    protected $encryptable = [
        'text',
    ];

    /**
     * Model de Text
     *
     * @return string
     */
    public function model()
    {
        return Text::class;
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
