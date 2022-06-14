<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'login'=>'required|string|min:3|Max:30',
            'password'=>[
                'required',
//            Password::min(4)
//                ->mixedCase()
//                ->letters()
//                ->numbers()
//                ->symbols(),
                'confirmed'
            ],
        ];
    }

    public function messages()
    {
        return [
            'required'=>'Поле <:attribute> обязательно для заполнения',
//            'email' => 'Электронный адрес должен быть валидным',
            'min' => ''
        ];
    }
}
