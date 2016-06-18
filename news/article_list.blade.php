@extends("admin.master_page")
@section("title")
Danh Sách Các Bài Viết
@stop
@section("content_admin")
                    <div class="col-lg-12">
                        <h1 class="page-header">Danh Sách Các Bài Viết
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>stt</th>
                                <th>tiêu đề</th>
                                <th>mô tả</th>
                                <th>ảnh đại diện</th>
                                <th>xuất bản</th>
                                <th>xóa</th>
                                <th>sửa</th>
                            </tr>
                        </thead>
                        <tbody>
                           <?php $i=0 ?>
                           @foreach($article_temp as $prod)
                           <?php $i=$i+1 ?>
                            <tr class="even gradeC" align="center">
                                <td >{{ $i }}</td>
                                <td>{{ $prod->title }}</td>
                                <td>
                                  {{ $prod->description }}
                                </td>
                                <td><img  width="60px" height="50px" src="{{ asset('public/image_upload/articles/'.$prod->image) }}"></td>
                                <td>
                                  {{ $prod->published }}
                                </td>
                                <td class="center">
                                 {!! Form::open(array('route' =>array('admin.article.destroy',$prod->id),'method'=>'DELETE')) !!}
                                <i class="fa fa-trash-o fa-fw"></i><button class="but_delete" onclick="return confirmdelete('bạn có chắc chắn xóa không')" type="submit" > Xóa</button>
                                {!! Form::close() !!}
                                </td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{ route('admin.article.edit',$prod->id) }}">Sửa</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                @stop
