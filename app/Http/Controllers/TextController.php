<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\TextDecryptRequest;
use App\Http\Requests\TextDeleteRequest;
use App\Http\Requests\TextStoreRequest;
use App\Http\Requests\TextUpdateRequest;
use App\Repositories\TextRepository;

class TextController extends Controller
{
    protected $repo;

    public function __construct(TextRepository $repo)
    {
        $this->repo = $repo;
    }

    /**
     * Pega todos os cartões do usuário
     *
     * @return App\Text;
     */
    public function all()
    {
        return $this->repo->all();
    }

    /**
     * Pega o cartão pelo id :id
     *
     * @param  string $id
     * @return App\Text
     */
    public function get($id)
    {
        return $this->repo->get($id);
    }

    /**
     * Salva um novo cartão
     *
     * @param  TextStoreRequest $request
     * @return App\Text
     */
    public function store(TextStoreRequest $request)
    {
        return $this->repo->store($request->all());
    }

    /**
     * Atualiza um o cartão de id :id
     *
     * @param  TextUpdateRequest $request
     * @param  int                  $id
     * @return App\Text
     */
    public function update(TextUpdateRequest $request, $id)
    {
        return $this->repo->update($request->all(), $id);
    }

    /**
     * Apaga um novo cartão pelo id :id
     *
     * @param  TextDeleteRequest $request
     * @param  int                  $id
     * @return int
     */
    public function delete(TextDeleteRequest $request, $id)
    {
        return $this->repo->delete($id);
    }

    /**
     * Descriptografa o cartão de id :id
     *
     * @param  TextDecryptRequest $request
     * @param  int                   $id
     * @return App\Text
     */
    public function decrypt(TextDecryptRequest $request, $id)
    {
        return $this->repo->getDecrypt($request->secret, $id);
    }
}
