<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

use Illuminate\Foundation\Http\FormRequest;

class ContactFormRequest extends FormRequest
{
    public function rules()
    {
        return [
            'title' => 'required|min:10',
            'emails' => 'required|email',
            'messages' => 'required|min:10'
        ];
    }

    public function authorize()
    {
        return true;
    }
}





