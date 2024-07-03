<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $fillable = [
        'mr_name',
        'miss_name',
        'service_name',
        'email',
        'phone',
        'date',
        'status'
    ];
}
