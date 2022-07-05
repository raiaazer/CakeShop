<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'images' => 'array',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id');
    }    

    public function getImages()
    {
        $list = collect();
        foreach($this->images as $image)
        {
            $list->push(asset('storage/products/'.$image));
        }
        return $list;
    }

    public function discountType()
    {
        if(empty($this->discount_type))
        {
            return 'None';
        }
        return str()->ucfirst($this->discount_type);       
    }

    public function discountValue()
    {
        if(!empty($this->discount) && $this->discount > 0)
        {
            if($this->discount_type == 'flat')
            {
                return priceFormat($this->discount);
            }
            return $this->discount.'%';
        }
        return 'No Discount';
    }

    public function actualPrice()
    {
        $price = $this->price;
        $discountType = $this->discount_type;
        $discountValue = $this->discount;
        if($discountType == 'percentage')
        {
            $price = $price - ( ( $price * $discountValue) / 100 );
        }
        if($discountType == 'flat')
        {
            $price = $price - $discountValue;
        }
        return $price;
    }

    // public static function boot() {
    //     parent::boot();

    //     static::creating(function ($item) {
    //     });
    // }

}
