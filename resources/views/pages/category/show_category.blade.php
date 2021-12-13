@extends('welcome')
@section('content')


   <!-- khoi sach moi  -->
   <section class="_1khoi sachmoi bg-white">
        <div class="container">
            <div class="noidung" style=" width: 100%;">
                <div class="row">
                    <!--header-->
                    <div class="col-12 d-flex justify-content-between align-items-center pb-2 bg-transparent pt-4">
                    @foreach($category_name as $key  => $name)
                        <h1 class="header text-uppercase" style="font-weight: 400;">
                          {{$name->categoryname}}
                        </h1>
                    @endforeach    
                        
                    </div>
                </div>
               
                <div class="items">
                    <div class="row">
                            <div class="col-lg-3 col-md-4 col-xs-6 item DeanGraziosi">
                            @foreach($category_by_id as $key => $product)    
                                <div class="card ">
                                    <a href="product-item.html" class="motsanpham"
                                        style="text-decoration: none; color: black;" data-toggle="tooltip"
                                        data-placement="bottom" title="Lập Kế Hoạch Kinh Doanh Hiệu Quả">
                                        <img class="card-img-top anh" src="{{URL::to('./public/frontend/images/'.$product->bookimageurl)}}"
                                            alt="lap-ke-hoach-kinh-doanh-hieu-qua">
                                        <div class="card-body noidungsp mt-3">
                                            <h6 class="card-title ten">{{$product->bookname}}</h6>
                                            <small class="tacgia text-muted">Brian Finch</small>
                                            <div class="gia d-flex align-items-baseline">
                                                <div class="giamoi">111.200 ₫</div>
                                                <div class="giacu text-muted">139.000 ₫</div>
                                                <div class="sale">-20%</div>
                                            </div>
                                            <div class="danhgia">
                                                <ul class="d-flex" style="list-style: none;">
                                                    <li class="active"><i class="fa fa-star"></i></li>
                                                    <li class="active"><i class="fa fa-star"></i></li>
                                                    <li class="active"><i class="fa fa-star"></i></li>
                                                    <li class="active"><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <span class="text-muted">0 nhận xét</span>
                                                </ul>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach    
                            </div>
                            
                    </div>
                </div>
            </div>
        </div>
    </section>

   


@endsection