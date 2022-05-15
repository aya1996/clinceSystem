<?php

namespace App\Services\Report;

use App\Services\PaymentMethodInterface;

class PayPalPaymentMethod implements PaymentMethodInterface
{
    public function MakePayment()
    {
        return 'PayPal Payment';
    }
}
