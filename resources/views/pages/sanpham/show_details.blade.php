@extends('layout')
@section('content')
@foreach($product_details as $key => $value)

<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							<div class="view-product" >
								<img src="{{URL::to('/public/uploads/product/'.$value->product_image)}}" alt="" />
							</div>

                            <div id="similar-product" class="carousel slide" data-ride="carousel">
                                <!-- Wrapper for slides -->
                                  <div class="carousel-inner">

                                      <div class="item active">
                                        <a href=""><img src="{{URL::to('public/frontend/images/sanphambanchay1.png')}}" alt=""></a>
                                        <a href=""><img src="{{URL::to('public/frontend/images/sanphambanchay2.png')}}" alt=""></a>
                                        <a href=""><img src="{{URL::to('public/frontend/images/sanphambanchay3.png')}}" alt=""></a>
                                      </div>
                                  </div>

                                <!-- Controls -->
                                <a class="left item-control" href="#similar-product" data-slide="prev">
                                  <i class="fa fa-angle-left"></i>
                                </a>
                                <a class="right item-control" href="#similar-product" data-slide="next">
                                  <i class="fa fa-angle-right"></i>
                                </a>
                          </div>


						</div>
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								<img src="images/product-details/new.jpg" class="newarrival" alt="" />
								<h2>{{$value->product_name}}</h2>
								<p>Mã ID: {{$value->product_id}}</p>
								<img src="images/product-details/rating.png" alt="" />

								<form action="{{URL::to('/save-cart')}}" method="POST">
									@csrf
									<input type="hidden" value="{{$value->product_id}}" class="cart_product_id_{{$value->product_id}}">

                                            <input type="hidden" value="{{$value->product_name}}" class="cart_product_name_{{$value->product_id}}">

                                            <input type="hidden" value="{{$value->product_image}}" class="cart_product_image_{{$value->product_id}}">


                                            <input type="hidden" value="{{$value->product_price}}" class="cart_product_price_{{$value->product_id}}">

								<span>
									<span>{{($value->product_price).' VNĐ'}}</span>

									<label>Số lượng:</label>
									<input name="qty" type="number" min="1" class="cart_product_qty_{{$value->product_id}}"  value="1" />
									<input name="productid_hidden" type="hidden"  value="{{$value->product_id}}" />
								</span>
								<input type="submit" value="Thêm giỏ hàng" class="btn btn-primary btn-sm add-to-cart" data-id_product="{{URL::to('/show-cart')}}" name="add-to-cart">
								</form>

								<p><b>Tình trạng:</b> Còn hàng</p>
								<p><b>Điều kiện:</b> Mới 100%</p>

								<p><b>Thương hiệu:</b> {{$value->brand_name}}</p>
								<p><b>Danh mục:</b> {{$value->category_name}}</p>
								<a href=""><img src="images/product-details/share.png" class="share img-responsive"  alt="" /></a>
							</div><!--/product-information-->
						</div>
</div><!--/product-details--><!--/product-details-->
                    @endforeach

 @endsection
