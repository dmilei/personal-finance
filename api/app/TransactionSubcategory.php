<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TransactionSubcategory extends Model
{
    public function category(): BelongsTo
    {
        return $this->belongsTo(TransactionCategory::class, 'transaction_category_id');
    }

    public function addCategory(TransactionCategory $category): bool
    {
        return $this->category()->associate($category)->save();
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
