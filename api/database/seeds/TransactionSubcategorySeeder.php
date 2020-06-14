<?php

use App\TransactionCategory;
use App\TransactionSubcategory;
use App\Enums\TransactionCategory as TransactionCategoryEnum;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransactionSubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transaction_subcategories')->truncate();

        $incomeCategory = TransactionCategory::where('name', '=', TransactionCategoryEnum::INCOME)->first();
        $savingsCategory = TransactionCategory::where('name', '=', TransactionCategoryEnum::SAVINGS)->first();
        $spendingCategory = TransactionCategory::where('name', '=', TransactionCategoryEnum::SPENDING)->first();

        $categoriesArray = [
            [
                'categoryModel' => $incomeCategory,
                'subCategories' => [
                    'Salary',
                    'Interest',
                    'Incidental revenue',
                    'Other',
                ]
            ],
            [
                'categoryModel' => $savingsCategory,
                'subCategories' => [
                    'Stock investment',
                    'Bank deposit',
                    'Bonds',
                    'Physical assets',
                    'Other',
                ]
            ],
            [
                'categoryModel' => $spendingCategory,
                'subCategories' => [
                    'Bills',
                    'Loan payment',
                    'Mortgage',
                    'Grocery',
                    'Entertainment',
                    'Car/Travel',
                    'Gadget',
                    'Clothing',
                    'Other',
                ]
            ],
        ];

        foreach ($categoriesArray as $category) {
            foreach ($category['subCategories'] as $subCategory) {
                $model = new TransactionSubcategory();
                $model->name = $subCategory;
                $model->addCategory($category['categoryModel']);
                $model->save();
            }
        }
    }
}
