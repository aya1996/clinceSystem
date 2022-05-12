<?php

namespace App\Http\Controllers;

use App\Http\Requests\PatientRequest;
use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function store(PatientRequest $request)
    {

        $patient = Patient::create([
            'name'      => $request['name'],
            'phone'      => $request['phone'],
            'email'      => $request['email'],



        ]);

        $response = [
            'patient'    => $patient,

        ];
        return response($response, 201);
    }
}
