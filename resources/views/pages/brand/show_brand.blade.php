@extends('layout')
@section('content')

<div class="features_items">
    <!--features_items-->
    @foreach($brand_name as $key => $name)
    <h2 class="title text-center">{{$name->brand_name}}</h2>
    @endforeach
    @foreach($brand_by_id as $key => $product)
    <a href="{{URL::to('/chi-tiet/'.$product->product_id)}}">
    <div class="col-sm-3">
        <div class="product-image-wrapper">
            <div class="single-products">
                    <div class="productinfo text-center">
                        <img src="{{URL::to('public/uploads/product/'.$product->product_image)}}" alt="" />
                        <p><b>{{$product->product_name}}</b></p>
                        <h5>{{($product->product_price).' '.'VNĐ'}}</h5>
                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm Giỏ Hàng</a>
                    </div>
            </div>
            <div class="choose">
                <ul class="nav nav-pills nav-justified">
                    <li><a href="#"><i class="fa fa-heart"></i>Yêu Thích</a></li>
                    <li><a href="#"><i class="fa fa-plus-square"></i>So Sánh</a></li>
                </ul>
            </div>
        </div>
    </div>
    </a>
 @endforeach
</div><!--/recommended_items-->

@endsection
