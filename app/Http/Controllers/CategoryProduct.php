<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;

class CategoryProduct extends Controller
{
    // begin admin
    public function auth_login_admin() {
        $admin_id = Session::get('id'); 
        if($admin_id){ 
            
        }else{ 
            return Redirect::to('admin')->send(); 
        } 
    }

    public function show_all_category() {
        $this->auth_login_admin();
        $list_category = DB::table('categories')->get();
        $manager_category = view('admin.AllCategoryProduct')
                            ->with('list_category', $list_category);
        // return view('AdminLayout')->with('admin.all_category', $manager_category);
        return $manager_category;
    }

    public function show_form_add_category() {
        $this->auth_login_admin();
        return view('admin.AddCategoryProduct');
    }

    public function add_category(Request $request) {
        $this->auth_login_admin();
        if($request->category_name) {
            $category = array();
            $category['categoryname'] = trim($request->category_name);
            DB::table('categories')->insert($category);
            Session::put('message', 'Đã thêm thành công');
            return Redirect::to('add_category');
        }
        // return view('admin.AddCategoryProduct');
    }

    public function delete_category($id) {
        $this->auth_login_admin();
        DB::table('categories')->where('categoryid', $id)->delete();
        Session::put('message','Xóa danh mục thành công'); 
        return Redirect::to('all_category');
    }

    public function update_category() {

    }

    // end admin

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
