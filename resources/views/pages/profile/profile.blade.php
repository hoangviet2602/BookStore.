@extends('welcome')
@section('content')

<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
<link rel="stylesheet" href="{{asset('public/frontend/css/tai-khoan.css')}}">
<script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
<section class="duoinavbar">
        <div class="container text-white">
            <div class="row justify">
                <div class="col-lg-3 col-md-5">
                    <div class="categoryheader">
                        <div class="noidungheader text-white">
                            <i class="fa fa-bars"></i>
                            <span class="text-uppercase font-weight-bold ml-1">Danh mục sách</span>
                        </div>
                        <!-- CATEGORIES -->
                        <div class="categorycontent">
                        <ul >
                            @foreach($category as $key => $cate)
                            <li> <a href="{{URL::to('/danh-muc-san-pham/'.$cate->categoryid)}}">{{$cate->categoryname}}</a><i class="fa fa-chevron-right float-right"></i>
                              <ul>
                                    <li class="liheader"><a href="#" class="header text-uppercase">{{$cate->categoryname}}</a></li>
                                @foreach($sub_cate as $key => $sub)    
                                    @if($sub->parent == $cate->categoryid)                
                                        <li style="margin-left:50px"><a href="{{URL::to('/danh-muc-san-pham/'.$sub->categoryid)}}">{{$sub->categoryname}}</a></li>
                                    @endif
                                @endforeach    
                                </ul>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    </div>
                </div>
                <div class="col-md-5 ml-auto contact d-none d-md-block">
                    <div class="benphai float-right">
                        <div class="hotline">
                            <i class="fa fa-phone"></i>
                            <span>Hotline:<b>1900 1999</b> </span>
                        </div>
                        <i class="fas fa-comments-dollar"></i>
                        <a href="#">Hỗ trợ trực tuyến </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- nội dung của trang  -->
<section class="account-page my-3">
        <div class="container">
            <div class="page-content bg-white">
                <div class="account-page-tab-content m-4">
                    <!-- 2 tab: thông tin tài khoản, danh sách đơn hàng  -->
                    <nav>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-donhang-tab" data-toggle="tab" href="#nav-donhang" role="tab" aria-controls="nav-profile" aria-selected="false">Danh sách đơn hàng</a>
                          <a class="nav-item nav-link" id="nav-taikhoan-tab" data-toggle="tab" href="#nav-taikhoan" role="tab" aria-controls="nav-home" aria-selected="true">Thông tin tài khoản</a>
                          <a class="nav-item nav-link" id="nav-doimk" data-toggle="tab" href="#nav-doimatkhau" role="tab" aria-controls="nav-profile" aria-selected="false">Đổi mật khẩu</a>
                          
                        </div>
                    </nav>

                    <!-- nội dung 2 tab -->
                    <div class="tab-content">

                        <!-- nội dung tab 1: thông tin tài khoản  -->
                        <div class="tab-pane fade py-3" id="nav-taikhoan" role="tabpanel" aria-labelledby="nav-taikhoan-tab">
                            <div class="offset-md-4 mt-3">
                                <h3 class="account-header">Thông tin tài khoản</h3>
                            </div>
                            <div class="hoten my-3">
                                <div class="row">
                                    <label class="col-md-2 offset-md-2" for="account-hoten">Họ tên</label>
                                    <input class="col-md-4" type="text" name="account-hoten">
                                </div>
                            </div>
                            <div class="email my-3">
                                <div class="row">
                                    <label class="col-md-2 offset-md-2" for="account-email">Địa chỉ email</label>
                                    <input class="col-md-4" type="text" name="account-email" disabled="disabled" value="abc@gmail.com">
                                </div>
                            </div>
                            <div class="capnhat my-3">
                                    <div class="row">
                                        <button type="button" class="button-capnhat text-uppercase offset-md-4 btn btn-warning mb-4">Cập nhật</button>
                                    </div>
                                </div>
                            
                        </div>
                        <!-- nội dung tab 2: đổi mật khẩu-->
                        <div class="tab-pane fade py-3" id="nav-doimatkhau" role="tabpanel" aria-labelledby="nav-donhang-tab">
                            <div class="donhang-table">
                                <table class="m-auto">
                                <div class="thay-doi-mk">
                                <div class="mkcu my-3">
                                    <div class="row">
                                        <label class="col-md-2 offset-md-2" for="account-mkcu">Mật khẩu cũ</label>
                                        <input class="col-md-4" type="text" name="account-mkcu">
                                    </div>
                                </div>
                                <div class="mkmoi my-3">
                                    <div class="row">
                                        <label class="col-md-2 offset-md-2" for="account-mkmoi">Mật khẩu mới</label>
                                        <input class="col-md-4" type="text" name="account-mkmoi">
                                    </div>
                                </div>
                                <div class="xacnhan-mkmoi my-3">
                                    <div class="row">
                                        <label class="col-md-2 offset-md-2" for="account-xacnhan-mkmoi">Xác nhận mật khẩu</label>
                                        <input class="col-md-4" type="text" name="account-xacnhan-mkmoi">
                                    </div>
                                </div>
                                <div class="capnhat my-3">
                                    <div class="row">
                                        <button type="button" class="button-capnhat text-uppercase offset-md-4 btn btn-warning mb-4">Cập nhật</button>
                                    </div>
                                </div>
                            </div>
                                </table>
                            </div>
                        </div>

                        <!-- nội dung tab 3: danh sách đơn hàng -->
                        <div class="tab-pane fade show active pl-4" id="nav-donhang" role="tabpanel" aria-labelledby="nav-donhang-tab">
                            <div class="donhang-table">
                                <table class="m-auto">
                                    <tr>
                                        <th>Mã đơn hàng</th>
                                        <th>Ngày mua</th>
                                        <th>Tổng tiền</th>
                                        <th style="width:200px">Trạng thái đơn hàng</th>
                                        <th style="width:150px">Chi tiết đơn hàng</th>
                                    </tr>
                                    @foreach($ordered as $row)
                                    <tr>
                                        <td>{{$row->orderid}}</td>
                                        <td>{{$row->timestamp}}</td>
                                        
                                        <td>{{$row->totalmoney}}</td>
                                        <td>
                                            <?php if( $row->orderstatus == 0) 
                                                        echo "Đang chờ phê duyệt" ;
                                                    elseif($row->orderstatus == 1) 
                                                        echo "Đã phê duyệt";
                                                    else 
                                                        echo "Đã từ chối";
                                        ?>
                                        </td>
                                        <td>
                                        <!-- <button href="{{URL::to('/show-details-ordered/'.$row->orderid)}}"  data-target="#form" data-toggle="modal" style="width:100px;height:30px;background-color:blanchedalmond"
                                              >Xem chi tiết </button> -->
                                    <a  href="{{URL::to('/show-details-ordered/'.$row->orderid)}}" data-target="#form"
                                        style="display:inline-block">Xem chi tiết</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                        <!-- form chi tiết -->
                        @if(isset($details))
                           
                        <div class="" id="form" data-backdrop="static" tabindex="-1" aria-labelledby="dangky_tieude"
                             aria-hidden="true" >
                            <div class="modal-dialog ">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <ul class="tabs d-flex justify-content-around list-unstyled mb-0">
                                                <li >
                                                
                                                   <h6>Danh sách sản phẩm</h6>
                                                    <hr>
                                                </li>
                                                
                                                
                                            </ul>
                                            <button  class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true"><a href="{{URL::to('/show-profile')}}"> &times; </a></span>
                                            </button>
                                        </div>
                                        <div class="cart-list-items">
                                        @foreach($details as $d)
                                       
                                    <div class="cart-item d-flex" style="margin-top:8px">
                                    
                                    <a href="{{URL::to('/chi-tiet-san-pham/'.$d->bookid)}}" class="img">
                                        <img src="{{URL::to('public/frontend/images/'.$d->bookimageurl)}}" class="img-fluid" alt="anhsp1" style="width:120px"  >
                                    </a>
                                    <div class="item-caption d-flex w-100">
                                        <div class="item-info ml-3">
                                            <a href="{{URL::to('/chi-tiet-san-pham/'.$d->bookid)}}" class="ten" style="color:black;text-decoration:none">
                                                <h6>{{$d->bookname}}</h6></a><p>Số lượng: {{$d->qtyordered}}</p>
                                        </div>
                                        
                                        <div class="item-price ml-auto d-flex flex-column align-items-end">
                                        <div class="giamoi" style="margin-top:20px">  {{number_format($d->price)}} đ</div>
                                            
                                        </div>
                                    </div>
                                   
                                    </div>

                                </br>
                                <hr>
                                        @endforeach  
                                        </div>
                                    </div>
                            </div>
                        </div> 
                         
                        @endif

                        
                    </div>
                </div>
            </div>
        </div>
    </section>




@endsection