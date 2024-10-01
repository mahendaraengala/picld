<?php 

namespace App\Enums;

enum PaymentGateway:string 
{
    case CCAVENUE = "CCAVENUE";
    case RAZORPAY = "RAZORPAY";
    case STRIPE = "STRIPE";
    case PAYPAL = "PAYPAL";

    public function label(): string {
        return ucwords(str_replace('_',' ',strtolower($this->name)));
    }
}