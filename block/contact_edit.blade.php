@extends("admin.master_page")
@section("title")
sửa dịch vụ
@stop
@section("content_admin")
     {{ Form::open(array('route'=>array('admin.block.update',$contact_temp['id']),'method'=>'PUT','files'=> true)) }}
   <div class="form-group">
    <label for="exampleInputEmail1">link facebook</label>
    <input type="text" class="form-control" name="txtfacebook" value="{{ old('txtfacebook',isset($contact_temp)?$contact_temp['linkfacebook']:null) }}" id="exampleInputEmail1" placeholder="facebook">
  </div>
                <div class="form-group">
    <label for="exampleInputEmail2">link twitter</label>
    <input type="text" class="form-control" name="txttwitter" value="{{ old('txttwitter',isset($contact_temp)?$contact_temp['linktwitter']:null) }}" id="exampleInputEmail2" placeholder="twitter">
  </div>
                    <div class="form-group">
    <label for="exampleInputEmail2">link googleplus</label>
    <input type="text" class="form-control" name="txtgoogleplus" value="{{ old('txtgoogleplus',isset($contact_temp)?$contact_temp['linkgoogleplus']:null) }}" id="exampleInputEmail3" placeholder="googleplus">
  </div>  
                                  <div class="form-group">
    <label for="exampleInputEmail2">số điện thoại 1</label>
    <input type="text" class="form-control" name="txtphone1" value="{{ old('txtphone1',isset($contact_temp)?$contact_temp['phone1']:null) }}" id="exampleInputEmail4" placeholder="số điện thoại 1">
  </div> 
                                  <div class="form-group">
    <label for="exampleInputEmail2">số điện thoại 2</label>
    <input type="text" class="form-control" name="txtphone2" value="{{ old('txtphone2',isset($contact_temp)?$contact_temp['phone2']:null) }}" id="exampleInputEmail5" placeholder="số điện thoại 2">
  </div> 
                                  <div class="form-group">
    <label for="exampleInputEmail2">đại chỉ email</label>
    <input type="text" class="form-control" name="txtemail" value="{{ old('txtemail',isset($contact_temp)?$contact_temp['email']:null) }}" id="exampleInputEmail6" placeholder="đại chỉ email">
  </div>  
    <div class="form-group">
    <label for="exampleInputEmail2">Địa chỉ</label>
    <textarea type="text" class="form-control" rows="5" name="txtadress" id="exampleInputEmail7" placeholder="dia chi">{{ old('txtadress',isset($contact_temp)?$contact_temp['adress']:null) }}</textarea>
  </div>
                 <div class="form-group">
    <label for="exampleInputEmail2">google map</label>
    <textarea type="text" class="form-control" rows="5" name="txtgooglemap" id="exampleInputEmail8" placeholder="google map">{{ old('txtgooglemap',isset($contact_temp)?$contact_temp['linkgooglemap']:null) }}</textarea>
  </div>  
                                   <div class="form-group">
    <label for="exampleInputEmail2">logo</label>
    <img class="img-respnsive" id="image_logo" src="{{ asset('public/admin/images/logo/'.$contact_temp['logo']) }}" width="200px" height="100px">
    <input name="txtlogo" type="hidden" value="{{ $contact_temp['logo'] }}" >
    <input type="file" id="previewFileLogo" class="form-control" name="txtlogo" id="exampleInputEmail9" placeholder="logo">
  </div>

   <div class="form-group">
                <label>giới thiệu</label>
                <textarea style="width:100%; height:200px;" id="txtintroduce" name="txtintroduce">{{ old('txtintroduce',isset($contact_temp)?$contact_temp['introduce']:null) }}</textarea>
                <script type="text/javascript"> $(function() {  var editor = CKEDITOR.replace('txtintroduce', { 
                filebrowserBrowseUrl : '{{ asset("public/admin/ckfinder/ckfinder.html")}}',
                filebrowserImageBrowseUrl : '{{ asset("public/admin/ckfinder/ckfinder.html?Type=Images")}}',
                filebrowserFlashBrowseUrl : '{{ asset("public/admin/ckfinder/ckfinder.html?Type=Flash") }}', 
                filebrowserUploadUrl : '{{ asset("public/admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files")}}',
                filebrowserImageUploadUrl : '{{ asset("public/admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images")}}',
                filebrowserFlashUploadUrl : '{{ asset("public/admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash")}}',
                filebrowserWindowWidth : '900', filebrowserWindowHeight : '480' });
                CKFinder.setupCKEditor( editor, '{{ asset("public/admin/ckfinder/") }}' ); }); </script>
            </div>
  <button type="submit" class="btn btn-default">Lưu sửa</button>
{!! Form::close() !!}
@stop