<?php

namespace APP\Services;

use APP\Services\RecieveMethodInterface;

class RecieveService
{
    public function Refund(RecieveMethodInterface $RecieveMethod)
    {
        return $RecieveMethod->Amount();
    }
}
