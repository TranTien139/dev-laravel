@extends("admin.master_page")
@section("title")
Danh Sách Tài Khoản
@stop
@section("content_admin")
    <div class="col-lg-12">
                        <h1 class="page-header">Danh Sách Tài Khoản
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-responsive  table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>Số thứ tự</th>
                                <th>Địa Chỉ Email</th>
                                <th>Họ tên</th>
                                <th>Cấp Độ</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $i=0; ?>
                        @foreach($user_temp as $tv)
                          <?php $i = $i+1; ?>
                            <tr class="odd gradeX" align="center">
                                <td>{{ $i }}</td>
                                <td>{{ $tv->email }}</td>
                                <td>{{ $tv->fullname }}</td>
                                <td>{{ $tv->level}}</td>
                                
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

 @stop