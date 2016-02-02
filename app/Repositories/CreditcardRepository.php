<?php

namespace App\Repositories;

use App\Creditcard;

class CreditcardRepository extends BaseCryptRepository
{
    protected $repo;

    public function __construct(Creditcard $creditcard)
    {
        $this->repo = $creditcard;
    }
}
