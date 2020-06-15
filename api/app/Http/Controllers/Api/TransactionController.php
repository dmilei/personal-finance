<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

class TransactionController extends Controller
{
    public function index()
    {
        return response()->json([], JsonResponse::HTTP_OK);
    }
}
