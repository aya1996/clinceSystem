<?php

namespace App\Http\Controllers;

use App\Http\Requests\PrescriptionRequest;
use App\Http\Requests\SurgeryRequest;
use App\Models\Patient;
use App\Models\Surgery;
use App\Services\prescriptionService;
use Illuminate\Http\Request;

class SurgeryController extends Controller
{
    public function store(SurgeryRequest $request)
    {

        $surgery = Surgery::create([
            'surgery_name'      => $request['surgery_name'],
            'surgey_date'      => $request['surgey_date'],
            'patient_id'      => $request['patient_id'],
        ]);

        $response = [
            'surgery'    => $surgery,

        ];
        return response($response, 201);
    }

    public function createPrescription(int $id, PrescriptionRequest $request, prescriptionService $prescriptionService)
    {

        $surgery = Surgery::find($id);
        return $prescriptionService->StorePrescription(
            $surgery,
            $request['name'],
            $request['quantity'],
            $request['quantity_perday'],
            $request['note'],

        );
    }
}
