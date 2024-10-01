<?php 

namespace App\Enums;

enum OrderStatus: string
{
    case PLACED = 'PLACED';
    case CONFIRMED = 'CONFIRMED';
    case CANCELLED = 'CANCELLED';
    
    public function label(): string {
        return ucwords(str_replace('_',' ',strtolower($this->name)));
    }
}