<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(TransactionCategorySeeder::class);
        $this->call(TransactionSubcategorySeeder::class);
        $this->call(TransactionSeeder::class);
    }
}
