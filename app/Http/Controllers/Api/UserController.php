<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

class UserController extends Controller
{


    /**
     * Retora uma lista de usuários.
     * @return JsonResponse
     */

    public function index(): JsonResponse
    {
        return response()->json([
            'status' => true,
            'users' => 'Listar usuarios'
            ],200);
    }
}