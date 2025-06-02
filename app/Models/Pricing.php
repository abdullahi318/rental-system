<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pricing extends Model
{
    use HasFactory;

    protected $fillable = ['rate_name','rate_description','rate_per_hour','max_daily_charge','valid_from','valid_to'];
    
}
