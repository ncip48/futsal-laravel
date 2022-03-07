<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $table = 'payment';
    protected $fillable = ['code', 'payment_type', 'transaction_id', 'transaction_time', 'transaction_status', 'bank_name', 'va_number', 'other', 'settlement_time'];
    protected $dates = [
        'transaction_time',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
}
