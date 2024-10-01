<?php 

namespace App\Enums;

enum GpuPricingType: string
{
    case BUY_NOW = 'BUY_NOW';
    case ON_REQUEST = 'ON_REQUEST';
    
    public function label(): string {
        return ucwords(str_replace('_',' ',strtolower($this->name)));
    }
}