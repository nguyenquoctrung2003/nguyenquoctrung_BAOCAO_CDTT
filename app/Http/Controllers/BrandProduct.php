<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Brand;
use App\Slider;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();
class BrandProduct extends Controller
{

    public function add_brand_product(){
    	return view('admin.add_brand_product');
    }
    public function all_brand_product(){

        $all_brand_product = Brand::orderBy('brand_id','DESC')->paginate(100);
    	$manager_brand_product  = view('admin.all_brand_product')->with('all_brand_product',$all_brand_product);
    	return view('admin_layout')->with('admin.all_brand_product', $manager_brand_product);


    }
    public function save_brand_product(Request $request){
        $data = $request->all();
        $brand = new Brand();
        $brand->brand_name = $data['brand_product_name'];

        $brand->brand_desc = $data['brand_product_desc'];
        $brand->brand_status = $data['brand_product_status'];
        $brand->save();

    	Session::put('message','<i>Thêm thương hiệu sản phẩm thành công !</i>');
    	return Redirect::to('add-brand-product');
    }
    public function unactive_brand_product($brand_product_id){
        DB::table('tbl_brand')->where('brand_id',$brand_product_id)->update(['brand_status'=>1]);
        Session::put('message','<i>Không kích hoạt thương hiệu sản phẩm thành công !</i>');
        return Redirect::to('all-brand-product');

    }
    public function active_brand_product($brand_product_id){

        DB::table('tbl_brand')->where('brand_id',$brand_product_id)->update(['brand_status'=>0]);
        Session::put('message','<i>Kích hoạt thương hiệu sản phẩm thành công !</i>');
        return Redirect::to('all-brand-product');

    }
    public function edit_brand_product($brand_product_id){



        $edit_brand_product = Brand::where('brand_id',$brand_product_id)->get();
        $manager_brand_product  = view('admin.edit_brand_product')->with('edit_brand_product',$edit_brand_product);

        return view('admin_layout')->with('admin.edit_brand_product', $manager_brand_product);
    }
    public function update_brand_product(Request $request,$brand_product_id){

        $data = $request->all();
        $brand = Brand::find($brand_product_id);

        $brand->brand_name = $data['brand_product_name'];

        $brand->brand_desc = $data['brand_product_desc'];
        $brand->brand_status = $data['brand_product_status'];
        $brand->save();

        Session::put('message','<i>Cập nhật thương hiệu sản phẩm thành công !</i>');
        return Redirect::to('all-brand-product');
    }
    public function delete_brand_product($brand_product_id){

        DB::table('tbl_brand')->where('brand_id',$brand_product_id)->delete();
        Session::put('message','<i>Xóa thương hiệu sản phẩm thành công !</i>');
        return Redirect::to('all-brand-product');
    }

    //End Function Admin Page
    public function show_brand_home($brand_id){
        $cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get();
        $brand_product = DB::table('tbl_brand')->where('brand_status','0')->orderby('brand_id','desc')->get();
        $brand_by_id = DB::table('tbl_product')->join('tbl_brand','tbl_product.brand_id','=','tbl_brand.brand_id')->where('tbl_brand.brand_id',$brand_id)->get();
        $brand_name = DB::table('tbl_brand')->where('tbl_brand.brand_id',$brand_id)->limit(1)->get();
        return view('pages.brand.show_brand')->with('category',$cate_product)->with('brand',$brand_product)->with('brand_by_id',$brand_by_id)->with('brand_name',$brand_name);
    }

}
