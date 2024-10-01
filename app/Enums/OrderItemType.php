<?php 

namespace App\Enums;

enum OrderItemType: string
{
    case CLOUD_SERVER = 'CLOUD_SERVER';
    case CLOUD_STORAGE = 'CLOUD_STORAGE';
    case GPU_SERVER = 'GPU_SERVER';
    case RENT_A_RACK = 'RENT_A_RACK';
    case RENT_A_SERVER = 'RENT_A_SERVER';
    
    public function label(): string {
        return ucwords(str_replace('_',' ',strtolower($this->name)));
    }
}