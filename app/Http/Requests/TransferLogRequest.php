<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TransferLogRequest extends FormRequest
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
            'name' => 'required|min:3',
            'phone' => ['required', 'regex:/^([0-9\s\-\+\(\)]*)$/'],
            'amount' => 'nullable|numeric',
            'from_user_id' => ['required','exists:users,id'],
            'to_user_id' => ['required','exists:users,id'],
            'p_code' => ['required','exists:providers,p_code'],
            'note' => ['nullable','string'],
            'status' => ['nullable']
        ];
    }

   

}
