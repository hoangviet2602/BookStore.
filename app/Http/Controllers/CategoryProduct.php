<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryProduct extends Controller
{
    //admin





    //user
    public  function show_category_home($categoryid){
        return view('category.show_category');
    }
}
