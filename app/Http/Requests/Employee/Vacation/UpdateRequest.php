<?php

namespace App\Http\Requests\Employee\Vacation;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
        ];
    }

    public function messages(): array
    {
        return [
            'start_date.required' => 'Дату начало отпуска обьязательно вписывать',
            'start_date' => 'Дату начало отпуска обьязательно вписывать',
            'end_date.required' => 'Дату конец отпуска обьязательно вписывать',
            'end_date.after_or_equal' => 'Нельзя выбрать дату до начала отпуска',
        ];
    }
}

