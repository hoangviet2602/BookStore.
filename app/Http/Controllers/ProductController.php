<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{
    //


    // User
    public function details_product($bookid){
        $cate_product = DB::table('categories')->get(); 
        $detai_product = DB::table('books')
        ->join('nxb','nxb.nxbid','=','books.nxbid')
        ->where('bookid','=',$bookid)->get();
        return view('pages.product.show_details')->with('category',$cate_product)->with('product_details',$detai_product);
    }
}
