<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SurgeryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'surgery_name'        => 'required|string',
            'surgey_date'   => 'required',
            'patient_id'     => 'required|exists:patients,id',
        ];
    }
}
