<?php

namespace App\Http\Requests\Profiles;

use Illuminate\Foundation\Http\FormRequest;

class ProfileUpdateRequest extends FormRequest
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
            'userrole'  => 'required',
            'username'  => 'required',
            'useremail'  => 'required',
            'userphone'  => 'nullable|max:50',
            'usernit'  => 'nullable|max:30',
            'userbusiness'  => 'nullable',
            'useraddress'  => 'nullable',
            'userpayment'  => 'nullable',
            'usercontact'  => 'nullable',
            'userisr'  => 'nullable',


        ];

    }

    public function attributes(){
            return [
            'userrole'  => 'Rol',
            'username'  => 'Nombre',
            'useremail'  => 'Correo',
            'userphone'  => 'Teléfono',
            'usernit'  => 'NIT',
            'userbusiness'  => 'Nombre de negocio',
            'useraddress'  => 'Dirección',
            'userpayment'  => 'Método de pago',
            'usercontact'  => 'Nombre de contacto',
            'userisr'  => 'ISR',
            ];


    }

    public function messages()
    {
        return [
            'userrole.required'  => 'El campo :attribute es obligatorio',
            'username.required'  => 'El campo :attribute es obligatorio',
            'username.alpha'  => 'El campo :attribute no debe contener numeros',
            'useremail.required'  => 'El campo :attribute es obligatorio',
            'useremail.unique'  => 'El dato del campo :attribute ya esta registrado',
            'userphone.required'  => 'El campo :attribute es obligatorio',
            'userphone.max'  => 'El campo :attribute excede el número de caracteres',
            'usernit.required'  => 'El campo :attribute es obligatorio',
            'usernit.max'  => 'El campo :attribute excede el número de caracteres',
            'usernit.numeric'  => 'El campo :attribute debe ser númerico',
            'userbusiness.required'  => 'El campo :attribute es obligatorio',
            'useraddress.required'  => 'El campo :attribute es obligatorio',
            'userpayment.required'  => 'El campo :attribute es obligatorio',
            'usercontact.required'  => 'El campo :attribute es obligatorio',
            'userisr.required'  => 'El campo :attribute es obligatorio',
        ];

    }
}
