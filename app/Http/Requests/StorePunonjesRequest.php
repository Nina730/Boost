<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePunonjesRequest extends FormRequest
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
            'emer' => 'required',
            'mbiemer' => 'required',
            'pozicioni' => 'required',
            'paga_ore' => 'required',
            'data_rregjister' => 'required',
         
        ];
    }
}
