<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Http\Requests;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Foundation\Console\Presets\React;
use Illuminate\Support\Facades\Redirect;
session_start();
class CartController extends Controller
{
    public function save_cart(Request $request){
        //$cate_product = DB::table('categories')->get(); 
        //$all_product = DB::table('books')->get();
        
        $productid = $request->product_id_hidden;
        $qty = $request->qty;

        $product_info  = DB::table('books')->where('bookid',$productid)->first();

        $data['id'] = $product_info ->bookid;
        $data['name'] = $product_info ->bookname;
        $data['price'] = $product_info ->price;
        $data['weight'] = $product_info ->bookweight;
        $data['options']['image'] = $product_info ->bookimageurl;
        $data['qty'] = $qty;
        Cart::add($data);

        return Redirect::to('/show-cart');
    }
    public function show_cart(){
        return view('pages.cart.show_cart');
    }
}
