<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Enums;

class Rental extends Model
{
    use HasFactory;

    protected $fillable = ['student_id','bicycle_id','station_id','start_station_id','start_time','end_station_id','end_time','actual_duration_minutes','cost','status'];
    
    protected $cast     = [
        'status' => StatusEnum::class,
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function bicycle()
    {
        return $this->belongsTo(Bicycle::class);
    }

    public function station()
    {
        return $this->belongsTo(Station::class);
    }
}
