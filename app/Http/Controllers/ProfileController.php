<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Http\Requests;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Foundation\Console\Presets\React;
use Illuminate\Support\Facades\Redirect;
use App\User;
session_start();

class ProfileController extends Controller
{
    public function show_profile(){
        $userid = Session::get('user')->userid;
        $ordered = DB::table('orders')->where('userid',$userid)->get(); 
        $cate_product = DB::table('categories')->where('categories.parent',1)->get();
        $sub_cate = DB::table('categories')->where('categories.parent','!=',1)->get();
        
        return view('pages.profile.profile')->with('ordered',$ordered)->with('category',$cate_product)->with('sub_cate',$sub_cate);
    }

    public function show_details_ordered($orderid){
        $userid = Session::get('user')->userid;
        $ordered = DB::table('orders')->where('userid',$userid)->get(); 
        $cate_product = DB::table('categories')->where('categories.parent',1)->get();
        $sub_cate = DB::table('categories')->where('categories.parent','!=',1)->get();
        // $orderdetail = DB::table('ordersdetails')->where('orderid',$orderid)->get();
        
        $orderdetail = DB::table('ordersdetails')->join('books','ordersdetails.bookid','=','books.bookid')->where(
            'orderid',$orderid)->get();

        return view('pages.profile.profile')->with('ordered',$ordered)->with('details',$orderdetail)->with('category',$cate_product)->with('sub_cate',$sub_cate);;
    }
}
