<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
            'name' => ['required','max:100'],
            'slug' => ['required','unique:categories,slug'.(request()->routeIs('category.update') ? ','.$this->category->id : '')],
            'status' => ['nullable','in:0,1'],
            'thumbnail' => [request()->routeIs('category.update') ? 'nullable' : 'required','image']
        ];
    }

    protected function prepareForValidation()
    {
        $this->merge([
            'slug' => \Str::slug($this->slug),
        ]);
    }

}
