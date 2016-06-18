@extends('themes.master')
@section('tieude')
Kết Quả Tìm Kiếm
@endsection
@section('content')
<div class="container minheight500">
    <div class="">
        <h3>kết quả tìm kiếm với từ khóa: {{$search}}</h3>
@if (isset($message))
<div class='bg-warning' style='padding: 20px'>
    {{$message}}
</div>
@endif

<hr />
@if(isset($keywords))
        <table class="table table-striped table-hover table-responsive">
                <thead>
                    <tr>
                    <th>Tên sản phẩm</th>
                    <th>Giá sản phẩm</th>
                    <th>Giảm giá</th>
                    <th>Nhóm sản phẩm</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($keywords as $item)
                <tr>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->price }}</td>
                    <td>@if($item->price_saleoff==0)<?php echo "Không giảm" ?>  @else Giảm{!! $item->price_saleoff !!} @endif</td>
                    <td>{{ $item->cate_id }}</td>
                </tr>
                @endforeach
                </tbody>
            </table>
            @else
            @endif
    </div>

</div>
@stop