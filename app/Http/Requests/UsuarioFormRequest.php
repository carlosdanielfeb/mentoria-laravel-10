<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Http\Controllers\UsuarioController;

class UsuarioFormRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }
 
    public function rules(): array
    {
        $request = [];
        if($this->method() == "POST" || $this->method() == "PUT" ){
        $request = [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]; 
    }

        return $request;
    }
}
