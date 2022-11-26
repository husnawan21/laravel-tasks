<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrationRequest extends FormRequest
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
   * @return array<string, mixed>
   */
  public function rules()
  {
    return [
      'email' => ['required', 'unique:users', 'email:dns'],
      'name' => ['required', 'string', 'min:4', 'max:50'],
      'username' => ['required', 'unique:users', 'alpha_num', 'min:3', 'max:25'],
      'password' => ['required', 'min:5'],
    ];
  }
}
