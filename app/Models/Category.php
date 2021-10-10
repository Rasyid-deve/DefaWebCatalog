<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use softDeletes;
    protected $table="categories"; 

    protected $fillable = [
        'id', 'category_names'
    ];

    protected $hidden = [

    ];

    public function product(){
        return $this->hasMany( Product::class, 'categories_id', 'id' );
    }
    public static function item()
    {   
        return Category::All();
    }
}
