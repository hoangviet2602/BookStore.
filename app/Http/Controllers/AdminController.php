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
    
        $admin_name =trim($request->username); 
        $admin_password = trim($request->password); 

// can sua bang
        $result = DB::table('users')
            ->where('username',$admin_name)
            ->where ('password',$admin_password)
            ->where('isadmin', 1)
            ->first(); 
        if($result){ 
            Session::put('name',$result->username); 
            Session::put('id',$result->userid);       
            return view('admin.dashboard'); 
        }else{ 
            Session::put('message','mat khau hoac email khong dung, nhap lai nhe'); 
            return Redirect::to('/admin'); 
        }  
    }
}
