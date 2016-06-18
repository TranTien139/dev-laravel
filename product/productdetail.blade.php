@extends('themes.master')
@section('tieude')
Chi Tiết Sản Phẩm
@endsection
@section('content')
 <?php $img_detail = DB::table('image_details')->where('product_id',$product_detail->id)->get() ?>
<div class="container">
    <div class="space80"></div>
    <div class="row">
    <div class="padding15">
     <div class=" col-sm-4 ">
     <div id="sync1" class="owl-carousel">
         <a rel="position: 'inside' , showTitle: false, adjustX:0, adjustY:0" class="img-responsive cloud-zoom" href="{{ asset('public/image_upload/product/'.$product_detail->image) }}">
                <img src="{{ asset('public/image_upload/product/'.$product_detail->image) }}" class="img-responsive" alt="no img">
        </a>
        @foreach($img_detail as $values)
        <div class="item" >
        <a rel="position: 'inside' , showTitle: false, adjustX:0, adjustY:0" class="img-responsive cloud-zoom" href="{{ asset('public/image_upload/product/product_detail/'.$values->imagedetail) }}">
        <img src="{{ asset('public/image_upload/product/product_detail/'.$values->imagedetail) }}" class="img-responsive" alt="chưa có ảnh">
        </a>
        </div>
        @endforeach
    </div>
        <div id="sync2" class="owl-carousel">
        <div class="item">
            <img src="{{ asset('public/image_upload/product/'.$product_detail->image) }}" class="img-responsive" width="100px" height="100px" alt="no img">
        </div>
        @foreach($img_detail as $values)
        <div class="item" >
        <img src="{{ asset('public/image_upload/product/product_detail/'.$values->imagedetail) }}" class="img-responsive" width="100px" height="100px" alt="chưa có ảnh">
        </div>
        @endforeach
        </div>
  </div>
     <div class="col-sm-6">
        <h4>{!!  $product_detail->name !!}</h4>
            <ul class="list-inline price-home">
                @if($product_detail->price_saleoff == 0)
                <li></li>
                <li>Giá:&nbsp;{{ $product_detail->price }}<span>&nbsp;VNĐ</span></li>
                @else
                <li>Giá:&nbsp;{{ $product_detail->price }}<span>&nbsp;VNĐ</span></li>
                <li>Giảm Giá:&nbsp;{{ $product_detail->price_saleoff }}&nbsp;<span>%</span></li>
                @endif
            </ul>
            <div class="weight"><p>Khối lượng &nbsp;{!! $product_detail->weight !!}</p></div>
            <div class="weight"><p>Kích thước &nbsp;{!! $product_detail->size !!} &nbsp;</p> </div>
            <ul class="list-inline cart-home add_product">
                <li><a href="{{ url('san-pham/mua-san-pham',[$product_detail->id,$product_detail->alias]) }}" class="hvr-icon-bounce"><i class="fa fa-cart-plus"></i>&nbsp;<span>MUA HÀNG</span></a></li>
                <li><a href="{!! url('lien-he') !!}" class="hvr-icon-bounce"><i class="fa fa-cart-plus"></i>&nbsp;<span>LIÊN HỆ VỚI CÔNG TY</span></a></li>
            </ul>
     </div>
    </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
    <div class=" col-sm-12" >
     <div class="title-home-product product_detail_title"><h1>THÔNG TIN VỀ SẢN PHẨM</h1></div>
     <div class="padding15">
        {!! $product_detail->content !!}
     </div>
    </div>
    </div>
    <!-- <div class="row">
    <div class=" col-sm-12" >
    <div class="title-home-product product_detail_title"><h1>MÔ TẢ SẢN PHẨM</h1></div>
    <div class="padding15">
        {!! $product_detail->description !!}
        </div>
    </div>
    </div> -->
     <!-- <div class="row">
    <div class="col-sm-12" >
     <div class="title-home-product product_detail_title"><h1>ƯU ĐIỂM CỦA SẢN PHẨM</h1></div>
     <div class="padding15">
        {!! $product_detail->useful !!}
        </div>
    </div>
    </div> -->
    <div class="row">
    <div class=" col-sm-12">
    <div class="title-home-product product_detail_title"><h1>BÌNH LUẬN SẢN PHẨM</h1></div>
    <div class="padding15">
    <div class="fb-comments" data-href="nsport.com.vn" data-width="100%" data-numposts="5"></div>
    </div>
    </div>
    </div>
    <div class="space80"></div>

</div>
@stop

