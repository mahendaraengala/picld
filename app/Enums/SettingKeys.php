<?php 

namespace App\Enums;

enum SettingKeys:string 
{
    case GST_PERCENTAG = "GST_PERCENTAG";
    case CONVENIENCE_FEES_PERCENTAGE = "CONVENIENCE_FEES_PERCENTAGE";

    public function label(): string {
        return ucwords(str_replace('_',' ',strtolower($this->name)));
    }
}