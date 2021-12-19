@extends('welcome')
@section('content')
    <!-- trang detail  -->
    <link rel="stylesheet" href="{{asset('public/frontend/css/product-item.css')}}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
<!-- nội dung của trang  -->
<section class="product-page mb-4">
        <div class="container">
            <!-- chi tiết 1 sản phẩm -->
            @foreach($product_details as $key =>$value)
            <div class="product-detail bg-white p-4">
                <div class="row">
                    <!-- ảnh  -->
                    <div class="col-md-5 khoianh">
                        <div class="anhto mb-4">
                            <a class="active" href="{{URL::to('./public/frontend/images/'.$value->bookimageurl)}}" data-fancybox="thumb-img">
                                <img class="product-image" src="{{URL::to('./public/frontend/images/'.$value->bookimageurl)}}"  style="width: 100%;">
                            </a>
                            <a href="{{URL::to('./public/frontend/images/'.$value->bookimageurl)}}" data-fancybox="thumb-img"></a>
                        </div>
                       <div class="list-anhchitiet d-flex mb-4" style="margin-left: 2rem;">
                            <img class="thumb-img thumb1 mr-3" src="{{URL::to('./public/frontend/images/'.$value->bookimageurl)}}" class="img-fluid" >
                            <img class="thumb-img thumb2" src="{{URL::to('./public/frontend/images/'.$value->bookimageurl)}}" class="img-fluid" >
                        </div>
                    </div> 
                    <!-- thông tin sản phẩm: tên, giá bìa giá bán tiết kiệm, các khuyến mãi, nút chọn mua.... -->
                    <div class="col-md-7 khoithongtin">
                        <div class="row">
                            <div class="col-md-12 header">
                                <h4 class="ten">{{$value->bookname}}</h4>
                                <div class="rate">
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star active"></i>
                                    <i class="fa fa-star "></i>
                                </div>
                                <hr>
                            </div>
                            <div class="col-md-7">
                                <div class="gia">
                                    <div class="giabia">Giá bìa:<span class="giacu ml-2">139.000 ₫</span></div>
                                    <div class="giaban">Giá bán tại DealBooks: <span
                                            class="giamoi font-weight-bold">{{number_format($value->price)}} </span><span class="donvitien">₫</span></div>
                                    <div class="tietkiem">Tiết kiệm: <b>27.800 ₫</b> <span class="sale" style="width:34px;">-20%</span>
                                    </div>
                                </div>
                                <div class="uudai my-3">
                                    <h6 class="header font-weight-bold">Khuyến mãi & Ưu đãi tại DealBook:</h6>
                                    <ul>
                                        <li><b>Miễn phí giao hàng </b>cho đơn hàng từ 150.000đ ở TP.HCM và 300.000đ ở
                                            Tỉnh/Thành khác <a href="#">>> Chi tiết</a></li>
                                        <li><b>Combo sách HOT - GIẢM 25% </b><a href="#">>>Xem ngay</a></li>
                                        <li>Tặng Bookmark cho mỗi đơn hàng</li>
                                        <li>Bao sách miễn phí (theo yêu cầu)</li>
                                    </ul>
                                </div>
                                <div class="soluong d-flex">
                                    <label class="font-weight-bold">Số lượng: </label>
                                    <div class="input-number input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text btn-spin btn-dec">-</span>
                                        </div>
                                        <input type="number"   value="1" class="soluongsp  text-center" >
                                        
                                        <div class="input-group-append">
                                            <span class="input-group-text btn-spin btn-inc">+</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="nutmua btn w-100 text-uppercase">Chọn mua</div>
                                <a class="huongdanmuahang text-decoration-none" href="#">(Vui lòng xem hướng dẫn mua
                                    hàng)</a>
                                <small class="share">Share: </small>
                                <div class="fb-like" data-href="https://www.facebook.com/DealBook-110745443947730/"
                                    data-width="300px" data-layout="button" data-action="like" data-size="small"
                                    data-share="true"></div>
                            </div>
                            <!-- thông tin khác của sản phẩm:  tác giả, ngày xuất bản, kích thước ....  -->
                            <div class="col-md-5">
                                <div class="thongtinsach">

                                        <li>Ngày xuất bản: <b>{{$value->releasedate}}</b></li>                   
                                        <li>Nhà xuất bản: {{$value->nxb}}</li>
                                        <li>Hình thức bìa: <b>Bìa mềm</b></li>
                                        <li>Số trang: <b>{{$value->bookpages}}</b></li>
                                        <li>Cân nặng: <b>{{$value->bookweight}}</b></li>
                                        <li>Số lượng còn: <b>{{$value->quantity}}</b></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                
                    <!-- decripstion của 1 sản phẩm: giới thiệu , đánh giá độc giả  -->
                    <div class="product-description col-md-9">
                        <!-- 2 tab ở trên  -->
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active text-uppercase" id="nav-gioithieu-tab"
                                    data-toggle="tab" href="#nav-gioithieu" role="tab" aria-controls="nav-gioithieu"
                                    aria-selected="true">Giới thiệu</a>
                                <a class="nav-item nav-link text-uppercase" id="nav-danhgia-tab" data-toggle="tab"
                                    href="#nav-danhgia" role="tab" aria-controls="nav-danhgia"
                                    aria-selected="false">Đánh
                                    giá của độc giả</a>
                            </div>
                        </nav>
                        <!-- nội dung của từng tab  -->
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active ml-3" id="nav-gioithieu" role="tabpanel"
                                aria-labelledby="nav-gioithieu-tab">
                                <h6 class="tieude font-weight-bold">{{$value->bookname}}</h6>
                                <p>@endforeach
                                    <span>Khi bắt đầu thành lập doanh nghiệp hay mở rộng quy mô hoạt động, lập ra một
                                        bản kế hoạch kinh doanh là bước đi đầu tiên không thể thiếu. Bản kế hoạch kinh
                                        doanh càng được chuẩn bị kỹ lưỡng và lôi cuốn bao nhiêu, cơ hội ghi điểm trước
                                        các nhà đầu tư càng lớn bấy nhiêu. Phải chăng, thông qua bản kế hoạch kinh
                                        doanh, bạn muốn người đọc:
                                    </span>
                                </p>
                                <p>
                                    <span>- Đầu tư vào một ý tưởng kinh doanh mới hay một doanh nghiệp đang hoạt
                                        động?</span>
                                </p>
                                <p>
                                    <span>- Mua lại doanh nghiệp của bạn?</span>
                                </p>
                                <p>
                                    <span>- Tham gia liên doanh với bạn?</span>
                                </p>
                                <p>
                                    <span>- Chấp nhận đề nghị của bạn để thực hiện hợp đồng?</span>
                                </p>
                                <p>
                                    <span>- Cấp cho bạn một khoản hỗ trợ hoặc phê duyệt theo quy định?</span>
                                </p>
                                <p>
                                    <span>- Thuyết phục hội đồng quản trị thay đổi phương hướng hoạt động doanh nghiệp
                                        của bạn?</span>
                                </p>
                                <p>
                                    <span>Cuốn sách “Lập kế hoạch kinh doanh hiệu quả” sẽ hướng dẫn bạn cách để tạo ra
                                        bản kế hoạch kinh doanh thu hút mọi tổ chức tài chính, khiến họ phải đáp ứng
                                        mong muốn của bạn và hỗ trợ bạn tới cùng trong công việc kinh doanh. Thông qua
                                        cuốn sách, bạn sẽ biết cách:</span>
                                </p>
                                <p>
                                    <span>Tạo ra bản kế hoạch kinh doanh hoàn chỉnh Xây dựng chiến lược hoạt động cho
                                        doanh nghiệp.</span>
                                </p>
                                <p>
                                    <span>Đưa ra dự báo kinh doanh sát với thực tế.</span>
                                </p>
                                <p>
                                    <span>Nắm rõ các thông tin tài chính ảnh hưởng lớn tới doanh nghiệp.</span>
                                </p>
                                <p>
                                    <span>Trong quá trình xây dựng kế hoạch, việc tham khảo ý kiến chuyên gia là điều
                                        cần thiết nhưng bạn phải là người đóng góp chính và hiểu tường tận mỗi chi tiết
                                        có trong đó. Hãy xem việc lập kế hoạch giống như việc truyền đạt câu chuyện của
                                        mình nhằm thuyết phục người đọc đồng hành cùng bạn trên con đường chinh phục mục
                                        tiêu kinh doanh.</span>
                                </p>
                                <p>
                                    <span>Bạn chỉ có một cơ hội duy nhất để tạo ấn tượng đầu tiên tốt đẹp. Đừng để nó
                                        vụt mất. Hãy trình bày một văn bản có tính thuyết phục cao, bố cục đẹp mắt,
                                        không mắc lỗi chính tả, ngữ pháp, bao gồm các vấn đề trọng tâm và cuối cùng là
                                        chứa các thông tin bổ trợ cần thiết.</span>
                                </p>
                                <p>
                                    <span>Bằng kiến thức, kinh nghiệm của mình, Brian Finch - một chuyên gia trong lĩnh
                                        vực tư vấn lập kế hoạch kinh doanh và quản lý tài chính - chắc chắn sẽ giúp bạn
                                        xây dựng thành công kế hoạch kinh doanh của riêng mình.</span>
                                </p>
                            </div>
                            <div class="tab-pane fade" id="nav-danhgia" role="tabpanel" aria-labelledby="nav-danhgia-tab">
                                <div class="row">
                                    <div class="col-md-3 text-center">
                                        <p class="tieude">Đánh giá trung bình</p>
                                        <div class="diem">0/5</div>
                                        <div class="sao">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <p class="sonhanxet text-muted">(0 nhận xét)</p>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="tiledanhgia text-center">
                                            <div class="motthanh d-flex align-items-center">5 <i class="fa fa-star"></i>
                                                <div class="progress mx-2">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="0"
                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                </div> 0%
                                            </div>
                                            <div class="motthanh d-flex align-items-center">4 <i class="fa fa-star"></i>
                                                <div class="progress mx-2">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="0"
                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                </div> 0%
                                            </div>
                                            <div class="motthanh d-flex align-items-center">3 <i class="fa fa-star"></i>
                                                <div class="progress mx-2">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="0"
                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                </div> 0%
                                            </div>
                                            <div class="motthanh d-flex align-items-center">2 <i class="fa fa-star"></i>
                                                <div class="progress mx-2">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="0"
                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                </div> 0%
                                            </div>
                                            <div class="motthanh d-flex align-items-center">1 <i class="fa fa-star"></i>
                                                <div class="progress mx-2">
                                                    <div class="progress-bar" role="progressbar" aria-valuenow="0"
                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                </div> 0%
                                            </div>
                                            <div class="btn vietdanhgia mt-3">Viết đánh giá của bạn</div>
                                        </div>
                                        <!-- nội dung của form đánh giá  -->
                                        <div class="formdanhgia">
                                            <h6 class="tieude text-uppercase">GỬI ĐÁNH GIÁ CỦA BẠN</h6>
                                            <span class="danhgiacuaban">Đánh giá của bạn về sản phẩm này:</span>
                                            <div class="rating d-flex flex-row-reverse align-items-center justify-content-end">
                                                <input type="radio" name="star" id="star1"><label for="star1"></label>
                                                <input type="radio" name="star" id="star2"><label for="star2"></label>
                                                <input type="radio" name="star" id="star3"><label for="star3"></label>
                                                <input type="radio" name="star" id="star4"><label for="star4"></label>
                                                <input type="radio" name="star" id="star5"><label for="star5"></label>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="txtFullname w-100" placeholder="Mời bạn nhập tên(Bắt buộc)">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="txtEmail w-100" placeholder="Mời bạn nhập email(Bắt buộc)">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="txtComment w-100" placeholder="Đánh giá của bạn về sản phẩm này">
                                            </div>
                                            <div class="btn nutguibl">Gửi bình luận</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <!-- het tab nav-danhgia  -->
                        </div>
                        <!-- het tab-content  -->
                    </div>
                    <!-- het product-description -->
                </div>
                <!-- het row  -->
            </div>
            <!-- het product-detail -->
        </div>
        <!-- het container  -->
    </section>
    @endsection