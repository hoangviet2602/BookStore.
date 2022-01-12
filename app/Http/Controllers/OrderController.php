<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;

class OrderController extends Controller
{
    //user
    public function show_all_orders(Request $request){
        $list_orders = DB::table('orders')
        ->join('users', 'orders.userid',  '=', 'users.userid')->get();
        return view('admin.AllOrder')->with('list_orders', $list_orders);   
    }

    public function show_order_details($id) {
        $order_info = DB::table('orders')->where('orderid', $id)->get();
        $order_list = DB::table('ordersdetails')
            ->join('books', 'ordersdetails.bookid', '=', 'books.bookid')
            ->where('orderid', $id)
            ->get();
        return view('admin.OrderDetail')
            ->with('order_info', $order_info[0])
            ->with('order_list', $order_list);
    }

    public function confirm_order(Request $request) {
        $data = $request->all();
        $order = array();
        $order['orderstatus'] = 1;
        if(DB::table('orders')->where('orderid', $data['orderId'])->update($order)) {
            echo 'success';
        } else {
            echo 'fail';
        }
        
    }
}
