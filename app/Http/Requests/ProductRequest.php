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
            'name' => ['required','max:255'],
            'slug' => ['required','unique:products,slug'.($this->isMethod('PUT') ? ','.$this->product->id : '')],
            'description' => ['required'],
            'price' => ['numeric','min:0'],
            'quantity' => ['integer','min:0'],
            'discount_type' => ['nullable','required_with:discount','in:flat,percentage'],
            'discount' => ['nullable','required_with:discount_type','numeric','min:1','max:'.($this->discount_type == 1 ? $this->discount : '100')],
            'status' => ['nullable','in:1,0'],
            'images' => [$this->isMethod('PUT') ? 'nullable' : 'required'],
            'images.*' => ['image'],
            'category_id' => ['required','exists:categories,id']
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'slug' => \Str::slug($this->slug),
        ]);
    }

}
