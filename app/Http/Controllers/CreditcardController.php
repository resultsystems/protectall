<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreditcardDeleteRequest;
use App\Http\Requests\CreditcardStoreRequest;
use App\Http\Requests\CreditcardUpdateRequest;
use App\Repositories\CreditcardRepository;

class CreditcardController extends Controller
{
    protected $repo;

    public function __construct(CreditcardRepository $repo)
    {
        $this->repo = $repo;
    }

    public function all()
    {
        return $this->repo->all();
    }

    public function get($id)
    {
        return $this->repo->get($id);
    }

    public function store(CreditCardStoreRequest $request)
    {
        return $this->repo->store($request->all());
    }

    public function update(CreditCardUpdateRequest $request, $id)
    {
        return $this->repo->update($request->all(), $id);
    }

    public function delete(CreditCardDeleteRequest $request, $id)
    {
        return $this->repo->delete($id);
    }
}
