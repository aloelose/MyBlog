<?php

namespace App\Http\Requests\Admin\User;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name'=>'required|string',
            'email'=>'required|string|email|unique:users,email, ' . $this->user_id,
            'user_id' => 'required|integer|exists:users,id',
            'role'=>'required|integer',
        ];
    }
    public function messages()
    {
        return [
          'name.required' => 'Это поле должно быть заполнено',
          'name.string' => 'Это поле должно быть строкового тива',
          'email.required' => 'Email должен быть заполнен',
          'email.string' => 'Email должен быть строкого типа',
          'email.email' => 'Email должен соответствовать формату email@some.domain',
          'email.unique' => 'Пользователь с таким Email уже существует',
          'role.unique' => 'Это поле должно быть заполнено',
          'role.integer' => 'Это поле должно быть числовым значением',
        ];
    }
}
