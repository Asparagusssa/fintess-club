<?php

use App\Models\Balance;
use App\Models\User;
use Illuminate\Support\Facades\DB;

beforeEach(function () {
    DB::beginTransaction();
});

afterEach(function () {
    DB::rollBack();
});

it('test deposit', function ()
{
    $user = User::factory()->create();
    $user->balance()->create();
    $this->actingAs($user);

    $balance = $user->balance->amount;

    $response = $this->post('/user/wallet', ['amount' => 100]);

    $response->assertRedirect('/user/wallet');

    $this->assertDatabaseHas('balances', [
        'user_id' => $user->id,
        'amount' => $balance + 100,
    ]);

    $this->assertDatabaseHas('transactions', [
        'balance_id' => $user->balance->id,
        'type' => 'Пополнение',
        'amount' => 100,
        'description' => 'Пополнение баланса'
    ]);
});
