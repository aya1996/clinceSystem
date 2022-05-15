<?php

namespace APP\Services;

use APP\Services\RefundMethodInterface;

class RefundService
{
    public function Refund(RefundMethodInterface $RefundMethod)
    {
        return $RefundMethod->Amount();
    }
    public function Reason (RefundMethodInterface $RefundMethod)
    {
        return $RefundMethod->Reason();
    }
}
