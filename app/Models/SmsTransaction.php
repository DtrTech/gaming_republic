<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class SmsTransaction extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'user_id',
        'contact_no',
        'code',
        'amount',
        'before_wallet',
        'after_wallet',
        'desc',
        'to',
        'ref',
        'currency',
        'balance',
        'cost_count_from_next',
        'new_balance_count_from_next',
    ];
}
