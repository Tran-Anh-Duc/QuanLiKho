<?php

namespace App\Http\Controllers;

use App\Repositories\AclUserRepository;
use Illuminate\Http\Request;

class AclUserController extends Controller
{
    protected $repository;

    public function __construct(AclUserRepository $repository)
    {
        $this->repository = $repository;
    }

    function showViewLogIn(){
        
        return view('LoginAndRegister.LogInAndRegister');
    }


    public function index()
    {
        $users = $this->repository->all();
        return response()->json($users);
    }

    public function show($id)
    {
        $user = $this->repository->find($id);
        return response()->json($user);
    }

    public function store(Request $request)
    {
        $user = $this->repository->create($request->all());
        return response()->json($user, 201);
    }

    public function update(Request $request, $id)
    {
        $user = $this->repository->update($id, $request->all());
        return response()->json($user);
    }

    public function destroy($id)
    {
        $this->repository->delete($id);
        return response()->json(null, 204);
    }
}
