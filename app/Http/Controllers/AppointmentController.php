<?php

namespace App\Http\Controllers;

use App\Http\Requests\AppointmentsRequest;
use App\Http\Requests\PrescriptionRequest;
use App\Models\Appointment;
use App\Models\Patient;
use App\Services\prescriptionService;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function store(AppointmentsRequest $request)
    {

        $appointment = Appointment::create([
            'appointment_reason'      => $request['appointment_reason'],
            'reservation_date'      => $request['reservation_date'],
            'patient_id'      => $request['patient_id'],
        ]);

        $response = [
            'appointment'    => $appointment,

        ];
        return response($response, 201);
    }

    public function createPrescription(int $id, PrescriptionRequest $request, prescriptionService $prescriptionService)
    {

        $appointment = Appointment::find($id);
        return $prescriptionService->StorePrescription(
            $appointment,
            $request['name'],
            $request['quantity'],
            $request['quantity_perday'],
            $request['note'],

        );
    }
}
