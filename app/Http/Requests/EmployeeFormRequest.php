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
        //dd($employee);
        return [
            'first_name' => 'required|min:2',
            'middle_name' => 'nullable|min:2',
            'last_name' => 'required|min:2',
            'contact_number' => 'required|min:2',
            'position' => 'required|min:2',
            'department_id' => 'required|exists:departments,id',
            'email' => 'required|email', //|unique:users,email,'.$this->employee->user_id,
            'password' => 'required_if:id,null', // move this in store method of employee controller
            'user_group_id' => 'required|exists:user_groups,id'
            // 'user_id' => 'required',
        ];
    }

    /**
     * Set custom validation message
     *
     * @return array
     */
    public function messages() : array
    {
        return [
            'department_id.required' => 'The department field is required.',
            'user_group_id.required' => 'The user group field is required.',
            'password.required_if' => 'The password field is required.',
        ];
    }
}