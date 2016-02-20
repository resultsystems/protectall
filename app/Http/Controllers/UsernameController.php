<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\UsernameDecryptRequest;
use App\Http\Requests\UsernameDeleteRequest;
use App\Http\Requests\UsernameStoreRequest;
use App\Http\Requests\UsernameUpdateRequest;
use App\Repositories\UsernameRepository;

class UsernameController extends Controller
{
    protected $repo;

    public function __construct(UsernameRepository $repo)
    {
        $this->repo = $repo;
    }

    /**
     * Pega todos os usernames do usuário.
     *
     * @return App\Username;
     */
    public function all()
    {
        $usernames = $this->repo->all();
        foreach ($usernames as $key => $value) {
            $usernames[$key]->password = '***';
        }

        return $usernames;
    }

    /**
     * Pega o username pelo id :id.
     *
     * @param  string $id
     * @return App\Username
     */
    public function get($id)
    {
        $username = $this->repo->get($id);
        if ($username->count() > 0) {
            $username->password = '***';
        }

        return $username;
    }

    /**
     * Salva um novo username.
     *
     * @param  UsernameStoreRequest $request
     * @return App\Username
     */
    public function store(UsernameStoreRequest $request)
    {
        $username = $this->repo->store($request->all());
        if (isset($username->id)) {
            $username->password = '***';

            return $username;
        }

        return response()->json(['error' => $username], 422);
    }

    /**
     * Atualiza um username pelo id :id.
     *
     * @param  UsernameUpdateRequest $request
     * @param  int                  $id
     * @return App\Username
     */
    public function update(UsernameUpdateRequest $request, $id)
    {
        $username = $this->repo->update($request->all(), $id);
        if (isset($username->id)) {
            $username->password = '***';

            return $username;
        }

        return response()->json(['error' => $username], 422);
    }

    /**
     * Apaga um username pelo id :id.
     *
     * @param  UsernameDeleteRequest $request
     * @param  int                  $id
     * @return int
     */
    public function delete(UsernameDeleteRequest $request, $id)
    {
        return $this->repo->delete($id);
    }

    /**
     * Descriptografa um username pelo id :id.
     *
     * @param  UsernameDecryptRequest $request
     * @param  int                   $id
     * @return App\Username
     */
    public function decrypt(UsernameDecryptRequest $request, $id)
    {
        return $this->repo->getDecrypt($request->secret, $id);
    }
}
