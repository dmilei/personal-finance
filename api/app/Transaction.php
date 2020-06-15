<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Auth;

class Transaction extends Model
{
    public function category(): BelongsTo
    {
        return $this->belongsTo(TransactionCategory::class, 'transaction_category_id');
    }

    public function subcategory(): BelongsTo
    {
        return $this->belongsTo(TransactionSubcategory::class, 'transaction_subcategory_id');
    }

    public function addCategory(TransactionCategory $category): bool
    {
        return $this->category()->associate($category)->save();
    }

    public function addSubcategory(TransactionCategory $subcategory): bool
    {
        return $this->subcategory()->associate($subcategory)->save();
    }

    public function scopeUserTransactions($query)
    {
        return $query->where('user_id', '=', Auth::user()->id);
    }
}
