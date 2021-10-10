<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class UserCategoryController extends Controller
{
    public function index(){
        return view('user.pages.category',['item' => Product::item(), 'category' => Category::item()]);
   }
}
