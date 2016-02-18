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
        $texts = $this->repo->all();
        foreach ($texts as $key => $value) {
            $texts[$key]->text = '***';
        }

        return $texts;
    }

    /**
     * Pega o cartão pelo id :id
     *
     * @param  string $id
     * @return App\Text
     */
    public function get($id)
    {
        $text = $this->repo->get($id);
        if ($text->count() > 0) {
            $text->text = '***';
        }

        return $text;
    }

    /**
     * Salva um novo cartão
     *
     * @param  TextStoreRequest $request
     * @return App\Text
     */
    public function store(TextStoreRequest $request)
    {
        $text       = $this->repo->store($request->all());
        $text->text = '***';

        return $text;
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
        $text       = $this->repo->update($request->all(), $id);
        $text->text = '***';

        return $text;
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
