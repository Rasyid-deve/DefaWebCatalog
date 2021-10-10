<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class DashboardUserController extends Controller
{
    public function index(){
        return view('user.pages.index',['product' => Product::product()]);
   }

   public function detail($id){
    $product = Product::where('id',$id)->first();
    return view('user.pages.detail_product', compact('product'));
}

}
