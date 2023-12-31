<?php namespace App\Modules\User\userValidate;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class updateUserValidate extends FormRequest {
  public function authorize(): bool {
    return true;
  }

  public function rules(): array {
    return [
      'name' => 'string',
      'email' => 'string|email',
      // 'password' => 'prohibited',
    ];
  }

  public function messages(): array {
    return [
      'name.string' => 'Name is string',
      'email.string' => 'Email is string',
      // 'password.prohibited' => 'this function does not update the password '
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
