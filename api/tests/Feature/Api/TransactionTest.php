<?php

namespace Tests\Feature;

use Illuminate\Http\JsonResponse;
use Tests\TestCase;

class TransactionTest extends TestCase
{
    /**
     * @test
     */
    public function it_can_get_list_of_transactions()
    {
        $this->getJson('/api/transactions')
            ->assertStatus(JsonResponse::HTTP_OK);
    }
}
