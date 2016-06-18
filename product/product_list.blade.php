@extends("admin.master_page")
@section("title")
Danh Sách Sản Phẩm
@stop
@section("content_admin")
                    <div class="col-lg-12">
                        <h1 class="page-header">Danh Sách Sản Phẩm
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>stt</th>
                                <th>tên sản phẩm</th>
                                <th>giá</th>
                                <th>phần trăm giảm giá (%)</th>
                                <th>loại sản phẩm</th>
                                <th>ảnh</th>
                                <th>xuất bản</th>
                                <th>xóa</th>
                                <th>sửa</th>
                            </tr>
                        </thead>
                        <tbody>
                           <?php $i=0 ?>
                           @foreach($product_temp as $prod)
                           <?php $i=$i+1 ?>
                            <tr class="even gradeC" align="center">
                                <td >{{ $i }}</td>
                                <td>{{ $prod->name }}</td>
                                <td>{{ $prod->price }} VNĐ</td>
                                <td>@if($prod->price_saleoff ==0)<?php echo "0%" ?>  @else {!! $prod->price_saleoff !!}%  @endif</td>
                                <?php 
                                  $data = DB::table('categorys')->where('id',$prod->category_id)->get();
                                ?>
                                <td>
                                @foreach($data as $item)
                                  {{ $item->name }}
                                @endforeach
                                </td>
                                <td><img  width="60px" height="50px" src="{!! asset('public/image_upload/product/'.$prod->image) !!}"></td>
                                <td>{{ $prod->published }}</td>
                                <td class="center">
                                 {!! Form::open(array('route' =>array('admin.product.destroy',$prod->id),'method'=>'DELETE')) !!}
                                <i class="fa fa-trash-o fa-fw"></i><button class="but_delete" onclick="return confirmdelete('bạn có chắc chắn xóa không')" type="submit" > Xóa</button>
                                {!! Form::close() !!}
                                </td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{ route('admin.product.edit',$prod->id) }}">Sửa</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                @stop
