<?php

use App\TransactionCategory;
use App\Enums\TransactionCategory as TransactionCategoryEnum;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransactionCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transaction_categories')->truncate();

        foreach (TransactionCategoryEnum::getTransactionCategories() as $transactionCategory) {
            $transactionCategoryModel = new TransactionCategory();
            $transactionCategoryModel->name = $transactionCategory;
            $transactionCategoryModel->save();
        }
    }
}
