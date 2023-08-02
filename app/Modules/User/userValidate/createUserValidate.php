<?php

namespace App\Modules\User\userValidate;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class createUserValidate extends FormRequest {
  public function authorize(): bool {
    return true;
  }

  public function rules(): array {
    return [
      'name' => 'required|string',
      'email' => 'required|string|email',
      'password' => 'required|string',
    ];
  }

  public function messages(): array {
    return [
      'name.required' => 'Name is required',
      'email.required' => 'Email is required',
      'password.required' => 'Password is required',
    ];
  }

  protected function failedValidation(Validator $validator) {
    throw new HttpResponseException(
      response()->json([
        'message' => 'Erro de validação',
        'erros' => $validator->errors(),
      ], 422)
    );
  }
}
