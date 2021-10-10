<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use softDeletes;
    protected $table="product"; 

    protected $fillable = [
        'id','product_names', 'categories_id', 'price', 'description', 'image',        
    ];

    protected $hidden = [

    ];

    public function categories(){
        return $this->belongsTo( Category::class, 'categories_id', 'id' );
    }
    public static function product()
    {   
        return Product::paginate(12);
    }
    public static function item()
    {   
        return Product::All();
    }
}
