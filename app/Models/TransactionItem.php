<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TransactionItem extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'user_id',
        'product_id', 
        'transaction_id', 
        'quantity',
    ];

    public function product(){
        return $this->hasOne(Product::class, 'id', 'product_id');
    }

}
