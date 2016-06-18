@extends("admin.master_page")
@section("title")
Thông Tin Tài Khoản
@stop
@section("content_admin")
<div class="col-lg-12">
                        <h1 class="page-header">Thông Tin Tài Khoản
                        </h1>
                    </div>
                    <div class="clearfix"></div>
         <ul class="list-group">
  <li class="list-group-item">Địa Chỉ Email: {!! Auth::user()->email !!}</li>
  <li class="list-group-item">Họ Tên: {!! Auth::user()->fullname !!}</li>
  <li class="list-group-item">Giới Tính: {!! Auth::user()->gender !!}</li>
  <li class="list-group-item">Ngày Sinh: {!! Auth::user()->birthday !!}</li>
  <li class="list-group-item">Cấp Độ: {!! Auth::user()->level !!}</li>
      </ul>
      <a href="{!! url('admin/user',[Auth::user()->id,'edit']) !!}">Sửa Thông Tin Cá Nhân</a>
             @stop