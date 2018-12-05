    @extends('master')
    @section('content')
    <!-- product-detail	 -->
    <div id="product_detail">
			<div class="container">
				<h1>Chi tiết sản phẩm {{$sanpham->name}}</h1>
				<div class="big-img">
					<img src="dientu/image/product/{{$sanpham->image}}" alt="" height="200px">
				</div>
				<div class="detail-name">
					<h2>{{$sanpham->name}}</h2>
				</div>
				<div class="detail-price">
					<h3>{{number_format($sanpham->unit_price)}} VND</h3>
				</div>
				<div class="detail-des">
					<p>Nam libero tempore, 
						cum soluta nobis est eligendi optio cumque nihil 
						impedit quo ms id quod maxime placeat facere possimus, 
						omnis volNam libero tempore, cum soluta nobis est eligendi 
						optio cumque nihil impedit quo ms id quod maxime placeat facere possimus, 
						omnis volNam libero tempore, cum soluta nobis est eligendi optio 
						cumque nihil impedit quo ms id quod maxime placeat facere possimus, 
						omnis vol</p>
				</div>
				<button type="button" class="btn btn-default"><a href="buynow.html">Mua ngay</a></button>
			</div> <!-- container -->
		</div>	<!-- product-detail	 -->
        <div style="clear: both"></div>
    @endsection