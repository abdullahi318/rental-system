<?php

namespace App\Enums;

enum StatusEnum : string 
{
    case ACTIVE    = 'active';
    case COMPLETED = 'completed';
    case OVERDUE   = 'overdue';
    case CANCELLED = 'cancelled';


    public function toString()
    {
        return match($this) {

            self::ACTIVE    => 'active',
            self::COMPLETED => 'completed',
            self::OVERDUE   => 'overdue',
            self::CANCELLED => 'cancelled',
        };
    }
}