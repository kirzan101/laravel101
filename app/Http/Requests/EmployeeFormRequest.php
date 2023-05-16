<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeFormRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        // dd($employee);
        return [
            'first_name' => 'required|min:2',
            'middle_name' => 'required|min:2',
            'last_name' => 'required|min:2',
            'contact_number' => 'required|min:2',
            'position' => 'required|min:2',
            'department_id' => 'required',
            'user_id' => 'required',
        ];
    }
}