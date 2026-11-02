<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class RequestName extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
            'ten_cau_thu' => 'required|string|max:255',
            'tuoi' => 'required|integer| min:0|max:40',
            'quoc_tich' => 'required|string|max:255',
            'vi_tri' => 'required|string|max:255',
            'luong' => 'required|numeric|min:0',
        ];
    }
    public function messages(): array
    {
        return[
         'required' => ':attribute khong duoc de trong',
         'min' => ':attribute phai lon hon :min',
         'max' => ':attribute phai nho hon :max',
         'integer' => ':attribute phai la so nguyen',
         'numeric' => ':attribute phai la so',
        ];
    }
    public function attributes(): array
   {
    return[
        'ten_cau_thu' => 'Ten cau thu',
        'tuoi' => 'Tuoi',
        'quoc_tich' => 'Quoc tich',
        'vi_tri' => 'Vi tri',
        'luong' => 'Luong',
    ];
   } 
   
}
