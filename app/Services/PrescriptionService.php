<?php

namespace App\Services;

use App\Models\Patient;
use App\Models\Prescription;

class prescriptionService
{
    public function StorePrescription(
        object $prescriptionable,
        string  $name,
        int  $quantity,
        int $quantity_perday,
        ?string $note,

    ): prescription {

        $prescription = $prescriptionable->prescriptions()->create([
            'name'      => $name,
            'quantity'      => $quantity,
            'quantity_perday'      => $quantity_perday,
            'note'   => $note ?? null


        ]);

        // $prescription = $patient->prescription()->create([
        //     'name'      => $name,
        //     'quantity'      => $quantity,
        //     'quantity_perday'      => $quantity_perday,
        //     'patient_id' => $patient_id


        // ]);

        return $prescription;
    }
}
