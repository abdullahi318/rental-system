<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRentalRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'student_id'              => 'required',
            'bicycle_id'              => 'required',
            'station_id'              => 'required',
            'start_station_id'        => 'required',
            'start_time'              => 'required',
            'end_station_id'          => 'required',
            'end_time'                => 'required',
            'actual_duration_minutes' => 'required',
            'cost'                    => 'required',
            'status'                  => 'required',
        ];
    }
}
