<?php

namespace App\Http\Controllers\Api;

use App\Transaction;
use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    public function index()
    {
        $transactions = Transaction::userTransactions()->get();

        return response()->json($transactions, JsonResponse::HTTP_OK);
    }
}
