@extends("admin.master_page")
@section("title")
Thêm bài viết
@stop
@section("content_admin")
    <div class="col-lg-12">
        <h1 class="page-header">Thêm Bài Viết
        </h1>
    </div>
    <!-- /.col-lg-12 -->
    <div class="col-lg-7 col-md-7" style="padding-bottom:120px">
        <form action="{{ route('admin.article.store') }}"  method="POST" enctype="multipart/form-data" >
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            <div class="form-group">
                <label>Tiêu đề</label>
                <input class="form-control" name="txttitle" placeholder="Tiêu đề bài báo" />
            </div>
            <div class="form-group">
                <label>Mô tả bài báo</label>
                <textarea class="form-control" name="txtdescription" rows="5" placeholder="Mô tả bài báo"></textarea>
            </div>
            <div class="form-group">
                <label>Nội dung bài báo</label>
                <textarea style="width:100%; height:200px;" id="txtcontent" name="txtcontent"></textarea>
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
            <input type="file" name="txtimage_article" value="" id="previewFileArticle"><br>
            <img src="" id="image_article" class="image_article" height="200" width="auto" alt="Ảnh Đại Diện ..">
           </div>

            <div class="form-group">
                <label>Ngày đăng</label>
                 <div class=" input-group">
                  <input type="text" class="form-control" name="txtdatetime" data-select="datepicker">
  <span class="input-group-btn"><button type="button" class="btn btn-primary" data-toggle="datepicker"><i class="fa fa-calendar"></i></button></span>
                </div>
            </div>
            <div class="form-group">
                <label>Bài báo nổi bật</label>
                <input type="checkbox" name="txtishot" value="yes" >
            </div>
             <div class="form-group">
                <label>Tác giả</label>
                <input class="form-control" name="txtauth" placeholder="Nhập tác giả" />
            </div>
             <div class="form-group">
                <label>Xuất bản</label>
                <input type="checkbox" name="txtpublished" value="yes" >
            </div>
            <button type="submit" class="btn btn-default">Thêm Bài Báo</button>
            <button type="reset" class="btn btn-default">Laod Lại</button>
      
    </div>
          <form>
    
@stop


