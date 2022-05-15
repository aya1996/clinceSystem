<?php

namespace APP\Services;

use APP\Services\PaymentMethodInterface;

class PaymentService
{
    public function Pay(PaymentMethodInterface $PaymentMethod)
    {
        return $PaymentMethod->MakePayment();
    }
}
