@extends('themes.master')
@section('tieude')
Giỏ Hàng
@endsection
@section('content')
<div id="product" >
    <div class="container">       
      <h1 class="heading1"><span class="maintext"> Giỏ Hàng</span><span class="subtext"></span></h1>
      <!-- Cart-->
      <div class="cart-info table-responsive">
        <table class="table  table-striped table-hover table-bordered">
          <tr>
            <th class="image">Ảnh</th>
            <th class="name">Tên Sản Phẩm</th>
            <th class="quantity">Số Lượng</th>
            <th class="total">Sửa/Xóa</th>
            <th class="price">Đơn Gía</th>
            <th class="total">Tổng Tiền</th>     
          </tr>
          <form method="POST" action="">
          <input type="hidden" value="{!! csrf_token() !!}" name="_token">
          @foreach($content as $item)
          <tr>
            <td class="image"><a href="#"><img title="product" alt="product" src="{!! asset('public/image_upload/product/'.$item['options']['img']) !!}" height="50" width="50"></a></td>
            <td  class="name"><a href="#">{!! $item['name'] !!}</a></td>
            <td class="quantity"><input type="text" size="1" value="{!! $item['qty'] !!}" name="quantity[40]" class="span1 qty">
             </td>
             <td class="total"> <a href="" id="{!! $item['rowid'] !!}" class="updatecart"><img class="tooltip-test" data-original-title="Update" src="{{asset('public/img/update.png') }}" alt="" ></a>
              <a href="{!! url('xoa-san-pham',['id'=>$item['rowid']]) !!}"><img class="tooltip-test" data-original-title="Remove"  src="{{asset('public/img/remove.png') }}" alt=""></a></td>
            <td class="price">{!! number_format($item['price'],0,",",".") !!} VNĐ</td>
            <td class="total">{!! number_format($item['price']*$item['qty'],0,",",".") !!} VNĐ</td>   
          </tr>
          @endforeach
          </form>
        </table>
      </div>
    </div>
     <div class="container">
      <div class="pull-right">
      <div class="col-sm-12">
          <div class="span4 pull-right">
            <table class="table table-striped table-bordered ">
              <tr>
                <td><span class="extra bold totalamout">Tổng tiền :</span></td>
                <td><span class="bold totalamout">{!! number_format($total,0,",",".") !!} VNĐ</span></td>
              </tr>
            </table>
            <a href="{!! url('thuc-hien-dat-hang') !!}" class="btn btn-primary pull-right">Thực hiện đặt hàng</a>
            <a href="{!! url('san-pham')  !!}" class="btn btn-primary pull-right mr10">Tiếp tục mua</a>
          </div>
        </div>
        </div>
        </div>
        <div class="container"></div>
  </div>
  <div class="container">
  <div class="space200"></div>
  </div>
  @stop