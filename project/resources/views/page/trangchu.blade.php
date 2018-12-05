@extends('master')
@section('banner')
<div id="demo" class="carousel slide" data-ride="carousel">
		  <ul class="carousel-indicators">
		    <li data-target="#demo" data-slide-to="0" class="active"></li>
		    <li data-target="#demo" data-slide-to="1"></li>
		    <li data-target="#demo" data-slide-to="2"></li>
		  </ul>
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img src="dientu/image/banner1.jpg" alt="Los Angeles" width="1100" height="500">  
		    </div>
		    <div class="carousel-item">
		      <img src="dientu/image/banner2.jpg" alt="Chicago" width="1100" height="500"> 
		    </div>
		    <div class="carousel-item">
		      <img src="dientu/image/banner3.jpg" alt="New York" width="1100" height="500">  
		    </div>
		    </div>
		  <a class="carousel-control-prev" href="#demo" data-slide="prev">
		    <span class="carousel-control-prev-icon"></span>
		  </a>
		  <a class="carousel-control-next" href="#demo" data-slide="next">
		    <span class="carousel-control-next-icon"></span>
		  </a>		
</div>
@endsection
@section('content')
<div class="container">
			<h1 style="padding-bottom: 30px; font-weight: bold; color: #524f4f">Sản phẩm mới nhất !</h1>
			<div class="row">
				@foreach($new_product as $new)
				<div class="col-sm-3">
					<div class="card" style="width: 255px;">
					  <!-- img 250px x 250px -->
					  <a href="{{route('chitietsanpham',$new->id)}}"><img class="card-img-top" src="dientu/image/product/{{$new->image}}" alt="Card image cap" height="250px"></a>
					  <hr>
					  <div class="card-body">
					    <h5 class="card-title">{{$new->name}}</h5>
					    <p class="card-text">{{number_format($new->unit_price)}} VND</p>
					    <a href="buynow.html" class="btn btn-success">Mua ngay</a>
					    <a href="cart.html" class="btn btn-warning">giỏ hàng</a>
					  </div>
					</div>
				</div>
				@endforeach
			</div>					
</div>
@endsection