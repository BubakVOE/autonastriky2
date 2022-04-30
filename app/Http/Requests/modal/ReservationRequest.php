<?php

namespace App\Http\Requests\modal;

use Illuminate\Foundation\Http\FormRequest;

class ReservationRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'firstName' => 'required',
            'lastName' => 'required',
            'mobile' => 'required|numeric',
            'date' => 'required',
            'email' => 'required|email',
        ];
    }

    public function messages()
    {
        return [
            'firstName.required' => 'Jméno nebyl vyplněn',

            'lastName.required' => 'Příjmení nebyl vyplněn',

            'mobile.required' => 'Číslo nebyl vyplněn',
            'mobile.numeric' => 'Číslo musí obsahovat pouze čísla',
            // 'mobile.max' => 'Číslo musí obsahovat maximálně 9 čísel',

            'date.required' => 'Datum nebyl vyplněn',

            'email.required' => 'Email nebyl vyplněn',
        ];
    }

}
