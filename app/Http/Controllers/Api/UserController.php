<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use App\Models\User;

class UserController extends Controller
{


    /**
     * Retora uma lista de usuários.
     * @return JsonResponse
     */

    public function index(): JsonResponse
    {
        $users = User::get();

        // Retorna os dados em formato JSON e status 200
        return response()->json([
            'status' => true,
            'users' => $users
            ],200);
    }
}