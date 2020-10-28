<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FinishOnboardingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() : array
    {
        return [
            'matric_number' => 'required|string',
            'level' => 'required|digits:3',
            'access_code' => 'required',
        ];
    }
}
