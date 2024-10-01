<?php 

namespace App\Enums;

enum ProductType:string 
{
    case CLOUD_SERVER = "CLOUD_SERVER";
    case CLOUD_STORAGE = "CLOUD_STORAGE";

    public function label(): string {
        return ucwords(str_replace('_',' ',strtolower($this->name)));
    }
}