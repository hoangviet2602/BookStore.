@extends('welcome2')
@section('content')


<link rel="stylesheet" href="{{asset('public/frontend/css/gio-hang.css')}}">
<!-- giao diện giỏ hàng  -->
<section class="content my-3">
        <div class="container">
            <div class="cart-page bg-white">
                <div class="row">
                    <!-- giao diện giỏ hàng khi không có item  
                    <div class="col-12 cart-empty d-none">
                        <div class="py-3 pl-3">
                            <h6 class="header-gio-hang">GIỎ HÀNG CỦA BẠN <span>(0 sản phẩm)</span></h6>
                            <div class="cart-empty-content w-100 text-center justify-content-center">
                                <img src="" alt="shopping-cart-not-product">
                                <p>Chưa có sản phẩm nào trong giở hàng của bạn</p>
                                <a href="{{URL::to('/trang-chu')}}" class="btn nutmuathem mb-3">Mua thêm</a>
                            </div>
                        </div>
                    </div> -->

                    <!-- giao diện giỏ hàng khi có hàng (phần comment màu xanh bên dưới là phần 2 sản phẩm trong giỏ hàng nhưng giờ đã demo bằng jquery) -->
                  <?php
                        use Gloudemans\Shoppingcart\Facades\Cart;
                        $content =   Cart::content();
                  ?>
                    
                    <div class="col-md-8 cart">
                        <div class="cart-content py-3 pl-3">
                             <h6 class="header-gio-hang">GIỎ HÀNG CỦA BẠN <span>(1 sản phẩm) </span></h6>
</br>
                             <hr>
                             <div class="group d-flex justify-content-between">
                                            <p class="label">Sản phẩm</p>
                                            <p class="label" style="margin-left:300px">Giá</p>
                                            <p class="giamgia">Thành tiền</p>
                                        </div>
                                        <br>
                                        <hr>
                             @foreach($content as $v_content)
                            <div class="cart-list-items">
                                <div class="cart-item d-flex">
                                    <a href="product-item.html" class="img">
                                        <img src="{{URL::to('public/frontend/images/'.$v_content->options->image)}}" class="img-fluid" alt="anhsp1">
                                    </a>
                                    <div class="item-caption d-flex w-100">
                                        <div class="item-info ml-3">
                                            <a href="product-item.html" class="ten">{{$v_content->name}}</a>
                                            <div class="soluong d-flex">
                                                <div class="input-number input-group mb-3">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text btn-spin btn-dec">-</span>
                                                    </div>
                                                    <input type="text" value="{{$v_content->qty}}" class="soluongsp  text-center">
                                                    <div class="input-group-append">
                                                        <span class="input-group-text btn-spin btn-inc">+</span>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="item-price ml-auto d-flex flex-column align-items-end">
                                        <div class="giamoi" style="margin-right:150px">Giá: {{number_format($v_content->price) }} đ</div>
                                            <div class="giamoi"  style="margin-top:-20px">
                                                <?php  $subtotal = $v_content->price * $v_content->qty;
                                                    echo number_format($subtotal) ;
                                                ?>
                                                đ
                                            </div>
                                            <span class="remove mt-auto"><i class="far fa-trash-alt"></i></span>
                                        </div>
                                    </div>
                                </div>
</br>
                                <hr>
                                @endforeach
                            </div> 
                             <div class="row">
                                <div class="col-md-3">
                                    <a href="{{URL::to('/trang-chu')}}" class="btn nutmuathem mb-3">Mua thêm</a>
                                </div>
                                <div class="col-md-5 offset-md-4">
                                    <div class="tonggiatien">
                                        <div class="group d-flex justify-content-between">
                                            <p class="label">Tạm tính:</p>
                                            <p class="tamtinh">{{Cart::subtotal()}} ₫</p>
                                        </div>
                                        <div class="group d-flex justify-content-between">
                                            <p class="label">Giảm giá:</p>
                                            <p class="giamgia">0 ₫</p>
                                        </div>
                                        <div class="group d-flex justify-content-between">
                                            <p class="label">Phí vận chuyển:</p>
                                            <p class="phivanchuyen">0 ₫</p>
                                        </div>
                                        <div class="group d-flex justify-content-between">
                                            <p class="label">Phí dịch vụ:</p>
                                            <p class="phidicvu">0 ₫</p>
                                        </div>
                                        <div class="group d-flex justify-content-between align-items-center">
                                            <strong class="text-uppercase">Tổng cộng:</strong>
                                            <p class="tongcong">{{Cart::subtotal()}} ₫</p>
                                        </div>
                                        <small class="note d-flex justify-content-end text-muted">
                                            (Giá đã bao gồm VAT)
                                        </small>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                  
                    <!-- giao diện phần thanh toán nằm bên phải  -->
                    
                            
                            <!-- bước số 2: nhập địa chỉ giao hàng  -->
                            
                                
                                <!-- bước 3: thanh toán đặt mua  -->
                               

                            </div>
                            
                        </div>
                    </div>
                    <!-- het div cart-steps  -->
                </div>
                <!-- het row  -->
            </div>
            <!-- het cart-page  -->
        </div>
        <!-- het container  -->
    </section>
@endsection