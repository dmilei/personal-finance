<?php declare(strict_types=1);

namespace App\Enums;

class TransactionCategory
{
    const INCOME = 'Income';
    const SAVINGS = 'Savings';
    const SPENDING = 'Spending';

    public static function getTransactionCategories()
    {
        return [self::INCOME, self::SAVINGS, self::SPENDING];
    }
}
