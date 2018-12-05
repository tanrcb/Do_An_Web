<header id="header" class="">
		<div class="container">	
			<div class="logo">
				<a href="{{route('trang-chu')}}"><h1>XGear</h1></a>
			</div>
			<div class="search">
				 <input class="form-control" id="myInput" type="text" placeholder="Search..">
				 <i class="fa fa-search" aria-hidden="true" style="cursor: pointer;"></i>
			</div>
			<div class="contact">
				<i class="fas fa-mobile-alt"><span>0909 123 456</span></i>
			</div>
			<div class="cart">
				<a href="cart.html"><i class="fa fa-shopping-basket" aria-hidden="true"><span>Giỏ hàng</span></i></a>
			</div>	
		</div> <!-- /container		 -->
	</header><!-- /header -->	
	
	<!-- nav -->
	<nav id="nav">
		<div class="container">
			<ul class="nav nav-pills nav-fill">
			@foreach($loai_sp as $loai)
			  <li class="nav-item">
			    <a class="nav-link " href="{{route('loaisanpham',$loai->id)}}">{{$loai->name}}</a>
			  </li>
			@endforeach
			</ul>
		</div>		
	</nav>	<!-- /nav -->