<?php

namespace App\Services\Report;

use App\Services\PaymentMethodInterface;

class StripPaymentMethod implements PaymentMethodInterface
{
    public function MakePayment()
    {
        return 'Strip Payment';
    }
}
