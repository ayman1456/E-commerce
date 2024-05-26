<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable=[
        'title',
        'slug',
        'featured_img',
        'brand',
        'price',
        'selling_price',
        'sku',
        'stock',
        'featured',
        'status',
        'short_detail',
        'long_detail',
        'cross_sell',
    ];

    //the following can be written instead of fillable
    // so that id can not to fillable others will be
    // protected $guarded=[
    //     'id'
    // ];


}
