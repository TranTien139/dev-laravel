@extends("admin.master_page")
@section("title")
Thêm Sản Phẩm
@stop
@section("content_admin")
                <div class="col-lg-12">
                    <h1 class="page-header">    Thêm Sản Phẩm
                        </h1>
                    </div>
                       <form action="{{ route('admin.product.store') }}"  method="POST" enctype="multipart/form-data" >
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-12 col-md-12" style="padding-bottom:120px">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                            <div class="form-group">
                                <label>tên sản phẩm</label>
                                <input class="form-control" name="txtname" placeholder="tên sản phẩm" />
                            </div>
                            <div class="form-group">
                                <label>giá sản phẩm</label>
                                <input class="form-control" name="txtprice" placeholder="nhập giá sản phẩm" />
                            </div>
                             <div class="form-group">
                                <label>phần trăm giảm giá (đơn vị %)</label>
                                <input class="form-control" name="txtprice_saleoff" placeholder="giá sản phẩm giảm giá" />
                            </div>
                            <div class="form-group">
                                <label>khối lượng sản phẩm (kg)</label>
                                <input class="form-control" name="txtweight" placeholder="nhập khối lượng" />
                            </div>
                            <div class="form-group">
                                <label>kích cỡ sản phẩm (cm)</label>
                                <input class="form-control" name="txtsize" placeholder="nhập kích cỡ" />
                            </div>
                            <div class="form-group">
                                <label>thông tin nhanh</label>
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
                                <label>mô tả sản phẩm</label>
                                <textarea style="width:100%; height:200px;" id="txtdescription" name="txtdescription"></textarea>
                                <script type="text/javascript"> $(function() {  var editor = CKEDITOR.replace('txtdescription', { 
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
                                <label>ưu điểm của máy</label>
                                <textarea style="width:100%; height:200px;" id="txtuseful" name="txtuseful"></textarea>
                                <script type="text/javascript"> $(function() {  var editor = CKEDITOR.replace('txtuseful', { 
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
                                <input type="file" name="txtimage" value="" id="previewFileProduct"><br>
                                <img src="" id="image_product" class="image_product" height="200" width="auto" alt="Ảnh Sản Phẩm ..">
                            </div>

                             <div class="form-group">
                                <label>thuộc nhóm sản phẩm</label>
                                <select class="form-control" name="txtcategory">
                                    <option value=" ">không thuộc nhóm nào</option>
                                    <?php cate_parent($category_temp) ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>sản phẩm nổi bật</label>
                                <input type="checkbox" name="txtishot" value="yes" >
                            </div>
                            <div class="form-group">
                                <label>sản phẩm mới</label>
                                <input type="checkbox" name="txtisnew" value="yes" >
                            </div>
                            <div class="form-group">
                                <label>sản phẩm bán chạy</label>
                                <input type="checkbox" name="txtbestseller" value="yes" >
                            </div>
                             <div class="form-group">
                                <label>xuất bản</label>
                                <input type="checkbox" name="txtpublished" value="yes" >
                            </div>
                            <div class="form-group">
                                <label>ảnh chi tiết sản phẩm</label>
                                <button class="btn btn-primary" id="button_add_input">Thêm hình ảnh</button>
                                <div id="wrap_field_input"></div>
                                <!-- <input type="file" name="txtimage_detail" value="" id="previewFileProductDetail"><br>
                                <img src="" id="image_productdetail" height="200" width="auto" alt="Ảnh Chi Tiết Sản Phẩm..">
                            </div> -->
                        </div>
                            <button type="submit" class="btn btn-default">Thêm sản phẩm</button>
                            <button type="reset" class="btn btn-default">Load lại</button>
                          <form>                   
                @stop


