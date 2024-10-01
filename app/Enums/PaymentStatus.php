<?php

namespace App\Enums;

enum PaymentStatus:string {
    
    case PENDING = "PENDING";
    case FAILED = "FAILED";
    case SUCCESS = "SUCCESS";
    case COMPLETED = "COMPLETED";

    public function label(): string {
        return ucwords(strtolower($this->name));
    }
}