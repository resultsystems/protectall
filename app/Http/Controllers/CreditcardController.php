<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreditcardDecryptRequest;
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

    /**
     * Pega todos os cartões do usuário
     *
     * @return App\Creditcard;
     */
    public function all()
    {
        return $this->repo->all();
    }

    /**
     * Pega o cartão pelo id :id
     *
     * @param  string $id
     * @return App\Creditcard
     */
    public function get($id)
    {
        return $this->repo->get($id);
    }

    /**
     * Salva um novo cartão
     *
     * @param  CreditcardStoreRequest $request
     * @return App\Creditcard
     */
    public function store(CreditcardStoreRequest $request)
    {
        return $this->repo->store($request->all());
    }

    /**
     * Atualiza um o cartão de id :id
     *
     * @param  CreditcardUpdateRequest $request
     * @param  int                  $id
     * @return App\Creditcard
     */
    public function update(CreditcardUpdateRequest $request, $id)
    {
        return $this->repo->update($request->all(), $id);
    }

    /**
     * Apaga um novo cartão pelo id :id
     *
     * @param  CreditcardDeleteRequest $request
     * @param  int                  $id
     * @return int
     */
    public function delete(CreditcardDeleteRequest $request, $id)
    {
        return $this->repo->delete($id);
    }

    /**
     * Descriptografa o cartão de id :id
     *
     * @param  CreditcardDecryptRequest $request
     * @param  int                   $id
     * @return App\Creditcard
     */
    public function decrypt(CreditcardDecryptRequest $request, $id)
    {
        return $this->repo->getDecrypt($id);
    }
}
