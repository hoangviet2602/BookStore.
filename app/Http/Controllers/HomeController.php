<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Http\Requests;
use App\User;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Gloudemans\Shoppingcart\Facades\Cart;
session_start();
class HomeController extends Controller
{

    public function index(){
        $cate_product = DB::table('categories')->where('categories.parent',1)->get(); 
        $sub_cate = DB::table('categories')->where('categories.parent','!=',1)->get();
        $all_product = DB::table('books')->join('nxb','books.nxbid','=','nxb.nxbid')->where('books.type',1)->get();
        
        // $cate_child = DB::table('categories')->where('categories.parent',$categoryid)->get();
        return view('pages.home')->with('category',$cate_product)->with('all_product',$all_product)->with('sub_cate',$sub_cate);
    }

    

    public function postDangKy(Request $request) {
        try {
            User::create([
                'fullname' => $request -> fullname,
                'email' => $request -> email,
                'phone' => $request -> phone,
                'male' => '0',
                'address' => 'huế',
                'password' =>bcrypt($request -> password) 
                ]);
        } catch(Exception $e) {

        }   
        if(Auth::attempt(['email'=>$request -> email, 'password'=>$request -> password])) {
            Session::put('user', Auth::user());
        }  
        return Redirect::to('/'); 
    }

    public function postDangNhap(Request $request) {
        $email = $request -> email;
        $password = $request -> password;
        if(Auth::attempt(['email'=>$email, 'password'=>$password])) {
            Session::put('user', Auth::user());
        } 
        return Redirect::to('/'); 
    }

    public function getDangXuat(Request $request) {
        Session::remove('user');
        return Redirect::to('/'); 
    }
}
 