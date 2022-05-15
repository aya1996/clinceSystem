<?php

namespace App\Http\Controllers;

use App\Services\Report\StripPaymentMethod;
use Illuminate\Http\Request;
use App\Services\PaymentService;
use App\Services\Report\PayPalPaymentMethod;

class ReportController extends Controller
{
    public function __construct(PaymentService  $paymentService)
    {
        $this->paymentService = $paymentService;
    }
    public function makePayment()
    {

        // $report = "report";
        //return $this->paymentService->Pay(new StripPaymentMethod());
        return $this->paymentService->Pay(new PayPalPaymentMethod());
    }
}
