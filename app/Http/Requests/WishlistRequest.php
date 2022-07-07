<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Product;

class WishlistRequest extends FormRequest
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
            'user_id' => ['required','exists:users,id'],
            'product_id' => ['required',function($attr,$val,$fail){
                $product = Product::find($val);
                if(empty($product))
                {
                    $fail('Product does not exists anymore.');
                }
                if(!$product->status)
                {
                    $fail('Product is not available.');
                }
                if(!$product->category->status)
                {
                    $fail('Product is not available.');
                }
            }]
        ];
    }
}
