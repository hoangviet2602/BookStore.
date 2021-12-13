<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();
class CategoryProduct extends Controller
{
    //admin





    //user
    public  function show_category_home($categoryid){
        
        $cate_product = DB::table('categories')->get(); 
        $category_by_id = DB::table('books')->join('categories','books.categoryid','=','categories.categoryid')->where(
            'books.categoryid',$categoryid)->get();
        $category_name = DB::table('categories')->where('categories.categoryid',$categoryid)->limit(1)->get();
        return view('pages.category.show_category')->with('category',$cate_product)->with('category_by_id',$category_by_id)->with(
            'category_name',$category_name);
    }
}
