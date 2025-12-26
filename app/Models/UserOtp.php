<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class UserOtp extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'contact_no',
        'code',
        'verified',
        'verified_at',
    ];
}
