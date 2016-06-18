@extends("admin.master_page")
@section("title")
Edit User
@stop
@section("content_admin")
<h3>Edit User</h3>
<div class="row">
<div class="col-md-6">
  <div class="profile">
    <div role="tabpanel" class="tab-pane active" id="profile">
    	{!! Form::open(array('route'=>array('admin.user.update',$user_temp['id']),'method'=>'PUT','files'=> true)) !!}
    	<input class="form-control" type="hidden" name="txtpassword" value="{{ old('txtpassword',isset($user_temp)?$user_temp['password']:null) }}" placeholder="Please Enter password" />
    	<div class="form-group">
	        <label>Ảnh Đại Diện</label>
	        <input type="file" name="image_profile" value="" onchange="previewFile()"><br>
	        <input type="hidden" name="txtavatar" class="txtimage_profile" value="{!! $user_temp['avatar'] !!}" >
            <img src="{!! $user_temp['avatar'] !!}" class="image_profile" height="200" width="auto" alt="Ảnh Đại Diện ..">
	    </div>
	    <div class="form-group">
	        <label>Họ Tên</label>
	        <input class="form-control" name="txtfullname" value="{{ old('txtfullname',isset($user_temp)?$user_temp['fullname']:null) }}" placeholder="Nhập họ tên đầy đủ" />
	    </div>
	    <div class="form-group">
	        <label>Email</label>
	        <input class="form-control" name="txtemail" value="{{ old('txtemail',isset($user_temp)?$user_temp['email']:null) }}" placeholder="Nhập Địa Chỉ Email" />
	    </div>
	     <div class="form-group">
	        <label>Ngày Sinh</label>
                <div class=" input-group">
                  <input type="text" class="form-control" value="{{ old('txtbirthday',isset($user_temp)?$user_temp['birthday']:null) }}" name="txtbirthday"  data-select="datepicker">
  <span class="input-group-btn"><button type="button" class="btn btn-primary" data-toggle="datepicker"><i class="fa fa-calendar"></i></button></span>
                </div>
	    </div>
	    <div class="form-group">
	     <label>Giới Tính</label>
	        <select name="txtgender" class="form-control">
	           @if($user_temp['gender'] =='nam')
	        	<option value="nam" selected>Nam</option>
	         	<option value="nữ">Nữ</option>
	         	@else
	         	<option value="nam" >Nam</option>
	         	<option value="nữ" selected>Nữ</option>
	         	@endif
	        </select>
	    </div>
	    <div class="form-group">
	     <label>Cấp Độ</label>
	        <select name="txtlevel" class="form-control" disabled="disabled">
	            @if($user_temp['level'] =='member')
	        	<option value="member" selected>member</option>
	        	<option value="admin">admin</option>
	        	@else
	        	<option value="member" >member</option>
	        	<option value="admin" selected>admin</option>
	        	@endif
	        </select>
	    </div>
    	<div class="form-group">
	        <button type="submit" >Lưu Sửa</button>
	    </div>
        {!! Form::close() !!}
    </div>
  </div>
</div>
<div class="col-md-6"></div>
</div>
@stop