<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory, Uuid, SoftDeletes;

    public function payment_transactions() {
        return $this->morphMany(PaymentTransaction::class, 'referable');
    }
}
