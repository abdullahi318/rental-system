<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePricingRequest extends FormRequest
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
            'rate_name'        => 'required',  
            'rate_description' => 'required',
            'rate_per_hour'    => 'required',
            'max_daily_charge' => 'required',
            'valid_from'       => 'required',
            'valid_to'         => 'required',
        ];
    }
}
