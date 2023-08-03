<?php namespace App\Modules\Anexos\anxValidate;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class anxValidate extends FormRequest {
  public function authorize(): bool {
    return true;
  }

  public function rules(): array {
    return [];
  }

  public function messages(): array {
    return [];
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
