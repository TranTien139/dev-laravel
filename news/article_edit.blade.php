@extends("admin.master_page")
@section("title")
Sửa Tin Tức
@stop
@section("content_admin")
<div class="col-lg-12">
    <h1 class="page-header">Sửa Tin Tức
    </h1>
</div>
<!-- /.col-lg-12 -->
<div class="col-lg-7" style="padding-bottom:120px">
     {{ Form::open(array('route'=>array('admin.article.update',$article_temp['id']),'method'=>'PUT','files'=> true)) }}
        <div class="form-group">
            <label>Tiêu đề</label>
            <input class="form-control" name="txttitle" value="{{ old('txttitle',isset($article_temp)?$article_temp['title']:null) }}" placeholder="tiêu dề bài báo" />
        </div>
        <div class="form-group">
            <label>Mô tả bài viết</label>
            <textarea class="form-control" name="txtdescription" rows="5" placeholder="Mô tả bài viết">{{ old('txtdescription',isset($article_temp)?$article_temp['description']:null) }}</textarea>
        </div>
        <div class="form-group">
            <label>Nội dung bài viết</label>
            <textarea style="width:100%; height:200px;" id="txtcontent" name="txtcontent">{{ old('txtcontent',isset($article_temp)?$article_temp['content']:null) }}</textarea>
            <script type="text/javascript"> $(function() {  var editor = CKEDITOR.replace('txtcontent', { 
            filebrowserBrowseUrl : '{{ asset("public/admin/ckfinder/ckfinder.html")}}',
            filebrowserImageBrowseUrl : '{{ asset("public/admin/ckfinder/ckfinder.html?Type=Images")}}',
            filebrowserFlashBrowseUrl : '{{ asset("public/admin/ckfinder/ckfinder.html?Type=Flash") }}', 
            filebrowserUploadUrl : '{{ asset("public/admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files")}}',
            filebrowserImageUploadUrl : '{{ asset("public/admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images")}}',
            filebrowserFlashUploadUrl : '{{ asset("public/admin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash")}}',
            filebrowserWindowWidth : '900', filebrowserWindowHeight : '480' });
            CKFinder.setupCKEditor( editor, '{{ asset("public/admin/ckfinder/") }}' ); }); </script>
        </div>
          
         <div class="form-group">
            <label>Ảnh Đại Diện</label>
            <input type="file" name="txtimage" value="" id="previewFileArticle"><br>
            <input type="hidden" name="txtimage1" class="txtimage_article" value="{!! $article_temp['image'] !!}" >
            <img src="{!! asset('public/image_upload/articles/'.$article_temp['image']) !!}" id="image_article" class="image_article" height="200" width="auto" alt="Ảnh Đại Diện ..">
           </div>

        <div class="form-group">
                <label>Ngày đăng</label>
                 <div class=" input-group">
                  <input type="text" class="form-control" name="txtdatetime" value="{{ old('txtdatetime',isset($article_temp)?$article_temp['datetime']:null) }}"  data-select="datepicker">
  <span class="input-group-btn"><button type="button" class="btn btn-primary" data-toggle="datepicker"><i class="fa fa-calendar"></i></button></span>
                </div>
        </div>
        <div class="form-group">
            <label>Tin nổi bật</label>
            @if($article_temp['ishot'] == "yes")
            <input type="checkbox" name="txtishot" checked value="yes" >
            @else
            <input type="checkbox" name="txtishot" value="yes" >
            @endif
        </div>
         <div class="form-group">
            <label>Tác giả</label>
            <input class="form-control" name="txtauth" value="{{ old('txtauth',isset($article_temp)?$article_temp['auth']:null) }}" placeholder="Nhập tên tác giả" />
        </div>
         <div class="form-group">
            <label>Xuất bản</label>
           @if($article_temp['published'] == "yes")
            <input type="checkbox" name="txtpublished" checked value="yes" >
            @else
            <input type="checkbox" name="txtpublished" value="yes" >
            @endif
        </div>
        <button type="submit" class="btn btn-default">Lưu Sửa</button>
        <button type="reset" class="btn btn-default">Load Lại</button>
</div>
 {{ Form::close() }}                
 @stop