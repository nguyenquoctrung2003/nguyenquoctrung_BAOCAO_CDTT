@extends('admin_layout')
@section('admin_content')
<div class="table-agile-info">
    <div class="panel panel-default">
      <div class="panel-heading">
        <b class="text-danger">Liệt kê sản phẩm</b>
      </div>

      <div class="table-responsive">
        <?php
                     $message = Session ::get('message');
                     if($message){
                        echo $message;
                          Session :: put('message',null);
                           }
                     ?>
        <table class="table table-striped b-t b-light">
          <thead>
            <tr>
              <th style="width:20px;">
                <label class="i-checks m-b-none">
                  <input type="checkbox"><i></i>
                </label>
              </th>
              <th>Tên sản phẩm</th>
              <th>Giá</th>
              <th>Hình sản phẩm</th>
              <th>Danh mục</th>
              <th>Thương hiệu</th>
              <th>Hiển thị</th>

              <th style="width:30px;"></th>
            </tr>
          </thead>
          <tbody>
            @foreach ($all_product as $key => $pro)

            <tr>
              <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
              <td>{{$pro ->product_name}}</td>
              <td>{{$pro ->product_price}}</td>
              <td><img src="public/uploads/product/{{$pro ->product_image}}" height="50" width="50"></td>
              <td>{{$pro ->category_name}}</td>
              <td>{{$pro ->product_name}}</td>

              <td><span class="text-ellipsis">
                <?php
                  if($pro->product_status==0){
                    ?>
                    <a href="{{URL::to('/unactive-product/'. $pro -> product_id)}}"><span class="fa-thumb-styling fa fa fa-eye"></span></a>
                    <?php
                  }else {
                    ?>
                    <a href="{{URL::to('/active-product/'. $pro -> product_id)}}"><span class="fa-thumb-styling fa fa-eye-slash"></span></a>
                  <?php
                  }
                  ?>
                </span>
                <a href="{{URL::to('/edit-product/'.$pro->product_id)}}" class="active styling-edit" ui-toggle-class="">
                  <i class="fa fa-pencil-square-o text-success text-active"></i></a>
                  <a onclick="return confirm('Bạn có chắc là muốn xóa sản phẩm này không?')" href="{{URL::to('/delete-product/'.$pro->product_id)}}" class="active styling-edit" ui-toggle-class="">
                  <i class="fa fa-trash text-danger text"></i>
                </a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <footer class="panel-footer">
        <div class="row">

          <div class="col-sm-5 text-center">
            <small class="text-muted inline m-t-sm m-b-sm"></small>
          </div>
          <div class="col-sm-7 text-right text-center-xs">
            <ul class="pagination pagination-sm m-t-none m-b-none">
              <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
              <li><a href="">1</a></li>
              <li><a href="">2</a></li>
              <li><a href="">3</a></li>
              <li><a href="">4</a></li>
              <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
            </ul>
          </div>
        </div>
      </footer>
    </div>
  </div>
@endsection
