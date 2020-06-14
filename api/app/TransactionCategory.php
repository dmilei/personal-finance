<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransactionCategory extends Model
{
    public function subCategories()
    {
        return $this->hasMany(TransactionSubcategory::class);
    }

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
