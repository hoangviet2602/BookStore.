<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class AdminController extends Controller
{
    public function index() {
        return view('AdminLogin');
    }

    public function showDashBoard() {
        return view('admin.DashBoard');
    }

    public function dashboard(Request $request) {
    
        $admin_email =trim($request->email); 
        $admin_password = trim($request->password); 
        $result = DB::table('admin')->where('email',$admin_email)->where ('password',$admin_password)->first(); 
        if($result){ 
            Session::put('name',$result->name); 
            Session::put('id',$result->id);       
            return view('admin.dashboard'); 
        }else{ 
            Session::put('message','mat khau hoac email khong dung, nhap lai nhe'); 
            return Redirect::to('/admin'); 
        }  
    }
}
