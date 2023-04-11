<?php

namespace App\Http\Requests\Managers\Vacation;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateRequest extends FormRequest
{
    /**
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'vacation_status' => 'required',
                Rule::in(['pending', 'approved', 'rejected']),
        ];
    }

    /**
     * @return string[]
     */
    public function messages(): array
    {
        return [
            'status.in' => 'Выбрать cтатус',
        ];
    }
}
