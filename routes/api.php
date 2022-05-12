<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\PrescriptionController;
use App\Http\Controllers\SurgeryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/createPatient', [PatientController::class, 'store']);
Route::post('/createAppointment', [AppointmentController::class, 'store']);
Route::post('/createSurgery', [SurgeryController::class, 'store']);
Route::post('/appointment/createPrescription/{id}', [AppointmentController::class, 'createPrescription']);
Route::post('/surgery/createPrescription/{id}', [SurgeryController::class, 'createPrescription']);

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
