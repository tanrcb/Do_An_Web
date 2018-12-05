@extends('master')
@section('content')
<div id="product-type">
		<div class="container-fluid">
			<h1>Loại sản phẩm</h1>
			<div class="row">
				<div class="col-sm-12">
					<div class="row">
					@foreach($sp_theoloai as $item)	
						<div class="col-sm-2">
							<div class="card" style="width: 220px;">
							  <!-- img 250px x 250px -->
								<a href="{{route('chitietsanpham',$item->id)}}"><img class="card-img-top" src="dientu/image/product/{{$item->image}}" 
								alt="Card image cap" height="200x"></a>
							  <hr>
							  <div class="card-body">
							    <h5 class="card-title">{{$item->name}}</h5>
							    <p class="card-text">{{number_format($item->unit_price)}} VND</p>
							    <a href="buynow.html" class="btn btn-success">Mua ngay</a>
							    <a href="cart.html" class="btn btn-warning">giỏ hàng</a>
								</div>
							</div>			
						</div>
						@endforeach	
					</div>
				</div>		
			</div>
		</div>
</div>
@endsection