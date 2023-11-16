@extends('layout')
@section('content')




<div class="features_items"><!--features_items-->

    <h2 class="title text-center" >SẢN PHẨM BÁN CHẠY</h2>
<div class="col-sm-4">

    <div class="product-image-wrapper">
        <div class="single-products">

                <div class="productinfo text-center">
                    <img src="{{('public/frontend/images/sanphambanchay3.png')}}" alt="" />

                    <p><b>GIÀY NIKE DUNK LOW SE GS 'LOTTERY PACK - GREY FOG' DQ0380-001</b></p>
                    <h5>4,900,000₫</h5>
                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                </div>
                <div class="product-overlay">
                    <div class="overlay-content">
                    <p><b>GIÀY NIKE DUNK LOW SE GS 'LOTTERY PACK - GREY FOG' DQ0380-001</b></p>
                    <h5>4,900,000₫</h5>
                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                    </div>
                </div>
        </div>
        <div class="choose">
            <ul class="nav nav-pills nav-justified">
                <li><a href="#"><i class="fa fa-heart"></i>Add to wishlist</a></li>
                <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="col-sm-4">
    <div class="product-image-wrapper">
        <div class="single-products">
                <div class="productinfo text-center">
                    <img src="{{('public/frontend/images/sanphambanchay2.png')}}" alt="" />

                    <p><b>GIÀY NIKE DUNK LOW SE GS 'LOTTERY PACK - GREY FOG' DQ0380-001</b></p>
                    <h5>4,900,000₫</h5>
                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                </div>
                <div class="product-overlay">
                    <div class="overlay-content">
                    <p><b>GIÀY NIKE DUNK LOW SE GS 'LOTTERY PACK - GREY FOG' DQ0380-001</b></p>
                    <h5>4,900,000₫</h5>
                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                    </div>
                </div>
        </div>
        <div class="choose">
            <ul class="nav nav-pills nav-justified">
                <li><a href="#"><i class="fa fa-heart"></i>Add to wishlist</a></li>
                <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="col-sm-4">
    <div class="product-image-wrapper">
        <div class="single-products">
                <div class="productinfo text-center">
                    <img src="{{('public/frontend/images/sanphambanchay1.png')}}" alt="" />

                    <p><b>GIÀY NIKE DUNK LOW SE GS 'LOTTERY PACK - GREY FOG' DQ0380-001</b></p>
                    <h5>4,900,000₫</h5>
                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                </div>
                <div class="product-overlay">
                    <div class="overlay-content">
                    <p><b>GIÀY NIKE DUNK LOW SE GS 'LOTTERY PACK - GREY FOG' DQ0380-001</b></p>
                    <h5>4,900,000₫</h5>
                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                    </div>
                </div>
        </div>
        <div class="choose">
            <ul class="nav nav-pills nav-justified">
                <li><a href="#"><i class="fa fa-heart"></i>Add to wishlist</a></li>
                <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
            </ul>
        </div>
    </div>
</div>
    <h2 class="title text-center">SẢN PHẨM MỚI NHẤT</h2>
    @foreach($all_product as $key => $product)
    <div class="col-sm-3">
        <div class="product-image-wrapper">
            <div class="single-products">
                    <div class="productinfo text-center">

                        <img src="{{URL::to('public/uploads/product/'.$product->product_image)}}" alt="" />
                        <p><b>{{$product->product_name}}</b></p>
                        <h5>{{($product->product_price).' '.'VNĐ'}}</h5>
                        <a href="" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm Giỏ Hàng</a>
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
    @endforeach
</div>
<!--features_items-->

<div class="category-tab"><!--category-tab-->
    <div class="col-sm-12">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#tshirt" data-toggle="tab">NIKE</a></li>
            <li><a href="#blazers" data-toggle="tab">NEW BALANCE</a></li>
            <li><a href="#sunglass" data-toggle="tab">Reebok</a></li>
            <li><a href="#kids" data-toggle="tab">VANS</a></li>
            <li><a href="#poloshirt" data-toggle="tab">Fila</a></li>
        </ul>
    </div>
    <div class="tab-content">
        <div class="tab-pane fade active in" id="tshirt" >
            <div class="col-sm-3">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{('public/frontend/images/nike1.png')}}" alt="" />

                            <p><b>GIÀY NIKE AIR FORCE 1 LOW 'ALL WHITE' </b></p>
                            <h5>2,800,000₫</h5>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{('public/frontend/images/nike2.png')}}" alt="" />
                            <p><b>
                                GIÀY NIKE JORDAN 1 RETRO HIGH OG 'HERITAGE'</b></p>
                            <h5>4,900,000₫</h5>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{('public/frontend/images/nike3.png')}}" alt="" />
                            <p><b>
                                GIÀY NIKE AIR JORDAN 1 MID SE 'GREY PINE GREEN' </b></p>
                            <h5>6,500,000₫</h5>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{('public/frontend/images/nike4.png')}}" alt="" />
                            <p><b>
                                GIÀY NIKE AIR JORDAN MID SEGS 'ROYAL BLACK TOE'</b></p>
                            <h5>5,500,000₫</h5>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>

                    </div>
                </div>
            </div>


            <div class="col-sm-3">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{('public/frontend/images/nike5.png')}}" alt="" />
                            <p><b>
                                GIÀY NIKE AIR JORDAN 'WHITE WOLF GREY'</b></p>
                            <h5>4,500,000₫</h5>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{('public/frontend/images/nike6.png')}}" alt="" />
                            <p><b>
                                GIÀY NIKE AIR JORDAN 1 RETRO HIGH CO.JP </b></p>
                            <h5>9,500,000₫</h5>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{('public/frontend/images/nike7.png')}}" alt="" />
                            <p><b>
                                GIÀY NIKE AIR JORDAN 1 RETRO HIGH GS</b></p>
                            <h5 >12,900,000₫</h5>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{('public/frontend/images/nike8.png')}}" alt="" />
                            <p><b>
                                GIÀY NIKE OFF-WHITE X AIR JORDAN 1 RETRO HIGH OG</b></p>
                            <h5>199,000,000₫</h5>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>


        <div class="tab-pane fade" id="blazers" >
            <div class="col-sm-3">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{('public/frontend/images/NEWBALANCE1.png')}}" alt="" />

                            <p><b>
                                GIÀY NEW BALANCE 550 'WHITE GREEN'</b></p>
                            <h5>4,500,000₫</h5>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{('public/frontend/images/NEWBALANCE2.png')}}" alt="" />
                            <p><b>
                                GIÀY NEW BALANCE 327 'PRIMARY PACK RED'</b></p>
                            <h5>3,900,000₫</h5>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{('public/frontend/images/NEWBALANCE3.png')}}" alt="" />
                            <p><b>
                                GIÀY NEW BALANCE 300 SERIES WHITE BLUE  </b></p>
                            <h5>2,500,000₫</h5>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{('public/frontend/images/NEWBALANCE4.png')}}" alt="" />
                            <p><b>
                                GIÀY NEW BALANCE TWO WXY V2 '75TH'</b></p>
                            <h5>2,900,000₫</h5>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>

                    </div>
                </div>
            </div>


            <div class="col-sm-3">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{('public/frontend/images/NEWBALANCE5.png')}}" alt="" />
                            <p><b>
                                GIÀY NEW BALANCE UNISEX 574 LOW TOP RUNNING SHOES BLUE</b></p>
                            <h5>2,500,000₫</h5>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{('public/frontend/images/NEWBALANCE6.png')}}" alt="" />
                            <p><b>
                                GIÀY NEW BALANCE NB 850 'PINK GREY-BLUE' </b></p>
                            <h5>2,500,000₫</h5>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{('public/frontend/images/NEWBALANCE7.png')}}" alt="" />
                            <p><b>
                                GIÀY NEW BALANCE NUMERIC 212 'WHITE GREEN'</b></p>
                            <h5 >12,900,000₫</h5>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{('public/frontend/images/NEWBALANCE8.png')}}" alt="" />
                            <p><b>
                              GIÀY NEW BALANCE PRO COURT 'BLACK WHITE'</b></p>
                            <h5>2,500,000₫</h5>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>

                    </div>
                </div>
            </div>

        </div>










        <div class="tab-pane fade" id="sunglass" >
            <div class="col-sm-3">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{('public/frontend/images/REEBOK1.png')}}" alt="" />

                            <p><b>
                                GIÀY REEBOK CHROMAT X INSTAPUMP FURY </b></p>
                            <h5>3,500,000₫</h5>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{('public/frontend/images/REEBOK2.png')}}" alt="" />
                            <p><b>
                                GIÀY REEBOK INSTAPUMP FURY CHROMAT</b></p>
                            <h5>2,500,000₫</h5>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{('public/frontend/images/REEBOK3.png')}}" alt="" />
                            <p><b>
                                GIÀY REEBOK INSTAPUMP FURY 'WHITE PINK'</b></p>
                            <h5>3,500,000₫</h5>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{('public/frontend/images/REEBOK4.png')}}" alt="" />
                            <p><b>
                                GIÀY REEBOK INSTAPUMP FURY UNDEFEATED </b></p>
                            <h5>5,500,000₫</h5>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{('public/frontend/images/REEBOK5.png')}}" alt="" />
                            <p><b>
                                GIÀY REEBOK INSTAPUMP FURY 'OLYMPIC RINGS'</b></p>
                            <h5>5,900,000₫</h5>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{('public/frontend/images/REEBOK6.png')}}" alt="" />
                            <p><b>
                                GIÀY REEBOK INSTAPUMP FURY POP</b></p>
                            <h5>5,500,000₫</h5>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>

                    </div>
                </div>
            </div>





        </div>










        <div class="tab-pane fade" id="kids" >
            <div class="col-sm-3">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{('public/frontend/images/VANS1.png')}}" alt="" />
                            <p><b>
                                GIÀY VANS AUTHENTIC SF ‘WINTER SKY NATURAL</b></p>
                            <h5>3,500,000₫</h5>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{('public/frontend/images/VANS2.png')}}" alt="" />
                            <p><b>
                                GIÀY VANS AUTHENTIC 'ROSE'</b></p>
                            <h5>2,900,000₫</h5>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{('public/frontend/images/VANS3.png')}}" alt="" />
                            <p><b>
                                GIÀY VANS CLASSIC SLIP-ON 'RED AND WHITE' </b></p>
                            <h5>3,900,000₫</h5>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{('public/frontend/images/VANS4.png')}}" alt="" />
                            <p><b>
                                GIÀY VANS OLD SKOOL STACKFORM 'PRIDE'</b></p>
                            <h5>2,900,000₫</h5>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>

                    </div>
                </div>
            </div>


            <div class="col-sm-3">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{('public/frontend/images/VANS5.png')}}" alt="" />
                            <p><b>
                                GIÀY VANS SK8 HI 'BLACK'</b></p>
                            <h5>4,500,000₫</h5>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{('public/frontend/images/VANS6.png')}}" alt="" />
                            <p><b>
                                GIÀY VANS SK8-HI REISSUE X SE BIKES 'PK RIPPER'  </b></p>
                            <h5>3,500,000₫</h5>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{('public/frontend/images/VANS7.png')}}" alt="" />
                            <p><b>
                                GIÀY VANS ECO THEORY STYLE 36 'DECON SF' </b></p>
                            <h5> 4,900,000₫</h5>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{('public/frontend/images/VANS8.png')}}" alt="" />
                            <p><b>
                                GIÀY VANS CLASSIC SLIP ON STACKFORM </b></p>
                            <h5>4,500,000₫</h5>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>

                    </div>
                </div>
            </div>

        </div>




        <div class="tab-pane fade" id="poloshirt" >
            <div class="col-sm-3">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{('public/frontend/images/FILA1.png')}}" alt="" />
                            <p><b>
                                GIÀY FILA OAKMENT 'WHITE GREEN'</b></p>
                            <h5>3,500,000₫</h5>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{('public/frontend/images/FILA2.png')}}" alt="" />
                            <p><b>
                                GIÀY FILA SKIPPER RED BROWN GREEN</b></p>
                            <h5>2,500,000₫</h5>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{('public/frontend/images/FILA2.png')}}" alt="" />
                            <p><b>
                                GIÀY FILA SKIPPER RED BROWN GREEN</b></p>
                            <h5>2,500,000₫</h5>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{('public/frontend/images/FILA3.png')}}" alt="" />
                            <p><b>
                                GIÀY FILA OAKMENT 'WHITE GREEN'</b></p>
                            <h5>2,500,000₫</h5>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{('public/frontend/images/FILA4.png')}}" alt="" />
                            <p><b>
                                GIÀY FILA JAJATO</b></p><br>
                            <h5>4,500,000₫</h5>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="product-image-wrapper">
                    <div class="single-products">
                        <div class="productinfo text-center">
                            <img src="{{('public/frontend/images/FILA2.png')}}" alt="" />
                            <p><b>
                                GIÀY FILA SKIPPER RED BROWN GREEN</b></p>
                            <h5>2,500,000₫</h5>
                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                        </div>

                    </div>
                </div>
            </div>




        </div>
    </div>
</div><!--/category-tab-->


<div class="recommended_items"><!--recommended_items-->
    <h2 class="title text-center"> SẢN PHẨM KHUYỄN MÃI</h2>

    <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="item active">
                <div class="col-sm-3">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <img src="{{('public/frontend/images/nike8.png')}}" alt="" />
                            <p><b>
                                GIÀY NIKE OFF-WHITE X AIR JORDAN 1 RETRO HIGH OG</b></p>
                            <h5>0₫</h5>
                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <img src="{{('public/frontend/images/nike4.png')}}" alt="" />
                            <p><b>
                                GIÀY NIKE AIR JORDAN MID SEGS 'ROYAL BLACK TOE'</b></p>
                            <h5>0₫</h5>
                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <img src="{{('public/frontend/images/nike9.png')}}" alt="" />
                            <p><b>
                                RIO ROLLER Laces, 155 cm <br> <i>( Tặng kèm )</i></b></p>
                            <h5>0₫</h5>
                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <img src="{{('public/frontend/images/nike10.png')}}" alt="" />
                            <p><b>SOCK <br> <i>( Tặng kèm )</i></b></p>

                            <h5>0₫</h5>
                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="col-sm-3">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <img src="{{('public/frontend/images/nike3.png')}}" alt="" />
                            <p><b>
                                GIÀY NIKE AIR JORDAN 1 MID SE 'GREY PINE GREEN'</b></p>
                            <h5>6,500,000₫</h5>
                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <img src="{{('public/frontend/images/nike2.png')}}" alt="" />
                            <p><b>
                                GIÀY NIKE JORDAN 1 RETRO HIGH OG 'HERITAGE</b></p>
                            <h5>4,900,000₫</h5>
                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <img src="{{('public/frontend/images/nike9.png')}}" alt="" />
                            <p><b>
                                RIO ROLLER Laces, 155 cm <br> <i>( Tặng kèm )</i></b></p>
                            <h5>0₫</h5>
                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <img src="{{('public/frontend/images/nike10.png')}}" alt="" />
                            <p><b>SOCK <br> <i>( Tặng kèm )</i></b></p>

                            <h5>0₫</h5>
                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                            </div>

                        </div>
                    </div>
                </div>










            </div>

        </div>
         <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
            <i class="fa fa-angle-left"></i>
          </a>
          <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
            <i class="fa fa-angle-right"></i>
          </a>
    </div>
</div><!--/recommended_items-->

@endsection
