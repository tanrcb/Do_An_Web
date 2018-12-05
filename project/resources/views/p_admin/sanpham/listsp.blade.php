@extends('p_admin.layout.index')
@section('content')
<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Sản phẩm
                            <small>danh sách</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Tên sản phẩm</th>
                                <th>Loại sản phẩm</th>
                                <th>Giá</th>
                                <th>Hình ảnh</th>
                                <th>Mã New</th>
                                <th>Xóa</th>
                                <th>Sửa</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($sanpham as $sp)
                                <tr class="odd gradeX" align="center">
                                    <td>{{$sp->id}}</td>
                                    <td>{{$sp->name}}</td>
                                    <td>{{$sp->type_product['name']}}</td>
                                    <td>{{number_format($sp->unit_price)}}VND</td>
                                    <td><img width="100px" src="dientu/image/product/{{$sp->image}}" ></td>
                                    <td>{{$sp['new']}}</td>
                                    <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onclick="return confirm('Bạn có muốn xóa không!')" href="p_admin/sanpham/xoasp/{{$sp->id}}" class="btn btn-danger">Xóa</a></td>
                                    <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="p_admin/sanpham/suasp/{{$sp->id}}" class="btn btn-warning">Sửa</a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
<!-- /#page-wrapper -->
@endsection