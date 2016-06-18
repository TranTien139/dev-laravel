@extends('themes.master')
@section('tieude')
Thực Hiện Đặt Hàng
@endsection
@section('content')
<div class="container"><div class="space30"></div></div>
<div class="container minheight500">
<div div="col-sm-12">
  <h3>THÔNG TIN SẼ ĐƯỢC GỬI TỚI EMAIL CỦA CÔNG TY, CÔNG TY SẼ CHỦ ĐỘNG LIÊN HỆ VỚI BẠN SỚM NHẤT</h3>
</div>

<div class="space30"></div>
<div class="row">
<div class="col-sm-6">
<form action="{!! url('thuc-hien-dat-hang') !!}" method="post" role="form">
<input name="_token" value="{!! csrf_token() !!}" type="hidden">
 <div class="form-group">
   <input type="text" class="form-control" name="txtname" placeholder = "Nhập họ tên đầy đủ của bạn">
 </div>
<div class="form-group">
   <input type="text" class="form-control" name="txtadress" placeholder = "Địa chỉ">
 </div>
 <div class="form-group">
   <input type="text" class="form-control" name="txtphone" placeholder = "Số điện thoại">
 </div>
 <div class="form-group">
   <input type="text" class="form-control" name="txtemail" placeholder = "Email">
 </div>
 <div class="form-group">
   <button type="submit" class="btn btn-primary">Gửi</button>
 </div>

</div>
<div class="col-sm-6">
  <div class="cart-info table-responsive">
        <table class="table  table-striped table-hover table-bordered">
          <tr>
            <th class="image">Ảnh</th>
            <th class="name">Tên Sản Phẩm</th>
            <th class="quantity">Số Lượng</th>
            <th class="price">Đơn Giá</th>
            <th class="total">Tổng Tiền</th>     
          </tr>
          @foreach($content as $item)
          <tr>
            <td class="image"><a ><img title="product" alt="product" src="{!! asset('public/image_upload/product/'.$item['options']['img']) !!}" height="50" width="50"></a></td>
            <td  class="name"><a >{!! $item['name'] !!}</a></td>
            <td class="quantity">{!! $item['qty'] !!}
             </td>
            <td class="price">{!! number_format($item['price'],0,",",".") !!}</td>
            <td class="total">{!! number_format($item['price']*$item['qty'],0,",",".") !!}</td>   
          </tr>
          @endforeach
        </table>
      </div>
      <p >Tổng Tiền</p>
      {!! number_format($total,0,",",".") !!}
</div>
</form>
</div>
</div>
@stop