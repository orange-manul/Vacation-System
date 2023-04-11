<?php

namespace App\Http\Requests\Employee\Vacation;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
        ];
    }

    /**
     * @return string[]
     */
    public function messages(): array
    {
        return [
            'start_date.required' => 'Дату начало отпуска обьязательно вписывать',
            'end_date.required' => 'Дату конец отпуска обьязательно вписывать',
            'end_date.after_or_equal' => 'Нельзя выбрать дату до начала отпуска',
        ];
    }
}
