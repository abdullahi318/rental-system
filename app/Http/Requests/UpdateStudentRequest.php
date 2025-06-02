<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateStudentRequest extends FormRequest
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
            'fname'         => 'required',
            'lname'         => 'required',
            'regNumber'     => 'required',
            'department_id' => 'required',
            'faculty_id'    => 'required',
            'gender'        => 'required',
            'email'         => 'required|email|min:10|max:255',
            'phoneNumber'   => 'required',
        ];
    }
}
