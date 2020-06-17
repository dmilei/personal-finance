<?php

namespace Tests\Feature\Api;

use App\Transaction;
use App\User;
use Illuminate\Http\JsonResponse;
use Tests\TestCase;

class TransactionTest extends TestCase
{
    /**
     * @test
     * @throws \Throwable
     */
    public function it_can_get_list_of_transactions()
    {
        $user = factory(User::class)->create();

        $transactions = factory(Transaction::class, 5)->create([
            'user_id' => $user->id
        ]);

        $response = $this->actingAs($user)->getJson('/api/transactions')
            ->assertStatus(JsonResponse::HTTP_OK)
            ->assertJsonCount(5)
            ->decodeResponseJson();

        $this->assertEquals($response[0]['user_id'], $user->id);
        $this->assertEquals($response[0]['transaction_category_id'], $transactions->toArray()[0]['transaction_category_id']);
        $this->assertEquals($response[0]['transaction_subcategory_id'], $transactions->toArray()[0]['transaction_subcategory_id']);
        $this->assertEquals($response[0]['amount'], $transactions->toArray()[0]['amount']);
    }
}
