<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'name' => ['required','min:255'],
            'slug' => ['required'],
            'description' => ['required'],
            'price' => ['numeric','min:0'],
            'quantity' => ['integer','min:0'],
            'discount_type' => ['nullable','in:1,0'],
            'discount' => ['required_with:discount_type','numeric','min:1','max:'.$this->request->discount_type == 1 ? $this->request->discount : '100'],
            'status' => ['nullable','in:1,0'],
            'images' => ['required','image']
        ];
    }
}
