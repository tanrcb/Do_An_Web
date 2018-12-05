@extends('p_admin.layout.index')
@section('content')
<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Sản phẩm
                            <small>Sửa</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="" method="POST">
                            <div class="form-group">
                                <label>Loại sản phẩm</label>
                                <select name="theloai" class="form-control>">
                                    @foreach($theloai as $tl)
                                        <option value="{{$tl->id}}">{{$tl->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Tên sản phẩm</label>
                                <input class="form-control" name="txtName" placeholder="Nhập tên sản phẩm"  value="{{$sanpham->name}}" />
                            </div>
                            <div class="form-group">
                                <label>Giá sản phẩm</label>
                                <input class="form-control" name="txtPrice" placeholder="Nhập giá sản phẩm" value="{{number_format($sanpham->unit_price)}}"/>
                            </div>
                            <div class="form-group">
                                <label>Hình ảnh</label>
                                <input type="file" name="hinh" class="form-control hinden">
                                <img width="150px" class="thumbnail" src="dientu/image/product/{{$sanpham->image}}">
                            </div>
                             <div class="form-group">
                                <label>Nổi bật</label>
                                <label class="radio-inline">
                                    <input name="rdoStatus" value="1" checked="" type="radio">Có
                                </label>
                                <label class="radio-inline">
                                    <input name="rdoStatus" value="0" checked="" type="radio">Không
                                </label>
                            </div>
                            <button type="submit" class="btn btn-default">Sửa</button>
                            <button type="reset" class="btn btn-default">Làm lại</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
@endsection