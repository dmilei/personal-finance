<?php

use App\User;
use App\Enums\Currencies;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();

        $user = new User();
        $user->create([
            'name' => 'John Doe',
            'email' => 'test@testmail.com',
            'password' => 'test123',
            'email_verified_at' => Carbon::now(),
            'currency' => Currencies::USD,
        ]);
    }
}
