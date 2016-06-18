@extends("admin.master_page")
@section("title")
khối dữ liệu tĩnh
@stop
@section("content_admin")
  <div class="col-lg-12">
                        <h1 class="page-header">Thông Tin Tài Khoản
                        </h1>
                    </div>
                    <div class="clearfix"></div>
         <ul class="list-group">
          <li class="list-group-item">Link facebook: {!! $contact_temp->linkfacebook !!}</li>
          <li class="list-group-item">Link twitter: {!! $contact_temp->linktwitter!!}</li>
          <li class="list-group-item">Link google+: {!! $contact_temp->linkgoogleplus !!}</li>
          <li class="list-group-item">Số Điện Thoại 1: {!! $contact_temp->phone1 !!}</li>
          <li class="list-group-item">Số Điện Thoại 2: {!! $contact_temp->phone2 !!}</li>
          <li class="list-group-item">Địa Chỉ: {!! $contact_temp->adress !!}</li>
          <li class="list-group-item">Địa Chỉ email: {!! $contact_temp->email!!}</li>
          <li class="list-group-item">link google map: {!! $contact_temp->linkgooglemap!!}</li>
          <li class="list-group-item">Giới Thiệu: {!! $contact_temp->introduce !!}</li>
      </ul>
      <a href="{!! url('admin/block',[$contact_temp->id,'edit']) !!}">Sửa Thông Tin </a>
@stop