<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
session_start();
class HomeController extends Controller
{
    public function index(){
        $cate_product = DB::table('categories')->get(); 
        $all_product = DB::table('books')->get();

        return view('pages.home')->with('category',$cate_product)->with('all_product',$all_product);
    }
}
 