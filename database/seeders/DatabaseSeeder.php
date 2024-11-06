<?php

namespace Database\Seeders;

use App\Models\ActiveSubscription;
use App\Models\Balance;
use App\Models\Subscription;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Ivan',
            'surname' => 'Chukavin',
            'email' => '1@1',
            'sex' => 'male',
            'password' => bcrypt('123qwe'),
        ]);

        Balance::factory()->create([
            'user_id' => 1,
            'amount' => 0,
        ]);

        Subscription::factory(3)->create();
    }
}
