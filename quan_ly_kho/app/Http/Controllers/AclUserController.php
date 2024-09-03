<?php

namespace App\Http\Controllers;

use App\Repositories\AclUserRepository;
use Illuminate\Http\Request;

class AclUserController extends Controller
{
    protected $aclUserRepository;

    public function __construct(AclUserRepository $aclUserRepository)
    {
        $this->aclUserRepository = $aclUserRepository;
    }

    function showViewLogIn(){

        return view('LoginAndRegister.LogInAndRegister');
    }


    public function store_register(Request $request)
    {
        echo "<pre>";
        echo "URL: " . $request->url() . "\n";
        echo "Method: " . $request->method() . "\n";
        echo "Headers: " . json_encode($request->headers->all(), JSON_PRETTY_PRINT) . "\n";
        echo "Query Parameters: " . json_encode($request->query(), JSON_PRETTY_PRINT) . "\n";
        echo "Input Data: " . json_encode($request->all(), JSON_PRETTY_PRINT) . "\n";
        echo "</pre>";
        die();
        $data = $request->all();

        $user = $this->aclUserRepository->create($request->all());
        return response()->json($user, 201);
    }

}
