@extends('master-layout')
@section('title')
Danh mục Sản phẩm
@endsection

@section('css')
<link rel="stylesheet" href="scss/home.css">
<link rel="stylesheet" href="css/product.css">
@endsection

@section('js')
<script>
	new WOW().init();
</script>
<script src="js/product.js"></script>
@endsection

@section('content')
<main>
	<div class="container">
		<div class="row">
			<div class="col-lg-3 slide-bar">
				<div class="list-product">
					<ul>
						<li class="title-list-product">Danh mục sản phẩm</li>
						<li class="item-product-list"><a href="{{route('product')}}">Bếp ga âm <span><i class="fas fa-chevron-right"></i></span></a></li>
						<li class="item-product-list"><a href="{{route('product')}}">Bếp từ<span><i class="fas fa-chevron-right"></i></span></a></li>
						<li class="item-product-list"><a href="{{route('product')}}">Máy hút mùi<span><i class="fas fa-chevron-right"></i></span></a></li>
						
					</ul>
				</div>
			</div>
			<div class="col-lg-9">
				<div class="link">
					<a href="{{route('home')}}">Trang chủ</a>
					<span>></span>
					<a href="{{route('product')}}">Sản phẩm</a>
				</div>
				<hr>
				<div class="collect-product">
				Bếp ga âm
				</div>
				<hr>

				<div class="row ">
					<div class="col-lg-4">
						<div class="product">
						<a href="{{route('product_detail')}}">
							<img class="image-product" src="images/bt1.jpg" alt="">
							<div class="sale">20%
							</div>
							<div class="name-product">
								Bếp từ maboshi 2 mặt
							</div>
							<div class="row">
								<div class="final-price col-lg-4">
									129.000đ
								</div>
								<div class="first-price col-lg-4">
									165.000đ
								</div>
							</div>
						</a>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="product">
						<a href="{{route('product_detail')}}">
							<img class="image-product" src="images/bt1.jpg" alt="">
							<div class="sale">20%
							</div>
							<div class="name-product">
								Bếp từ maboshi 2 mặt
							</div>
							<div class="row">
								<div class="final-price col-lg-4">
									129.000đ
								</div>
								<div class="first-price col-lg-4">
									165.000đ
								</div>
							</div>
						</a>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="product">
						<a href="{{route('product_detail')}}">
							<img class="image-product" src="images/bt1.jpg" alt="">
							<div class="sale">20%
							</div>
							<div class="name-product">
								Bếp từ maboshi 2 mặt
							</div>
							<div class="row">
								<div class="final-price col-lg-4">
									129.000đ
								</div>
								<div class="first-price col-lg-4">
									165.000đ
								</div>
							</div>
						</a>
						</div>
					</div>
				</div>
				<div class="row ">
					<div class="col-lg-4">
						<div class="product">
						<a href="{{route('product_detail')}}">
							<img class="image-product" src="images/bt1.jpg" alt="">
							<div class="sale">20%
							</div>
							<div class="name-product">
								Bếp từ maboshi 2 mặt
							</div>
							<div class="row">
								<div class="final-price col-lg-4">
									129.000đ
								</div>
								<div class="first-price col-lg-4">
									165.000đ
								</div>
							</div>
						</a>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="product">
						<a href="{{route('product_detail')}}">
							<img class="image-product" src="images/bt1.jpg" alt="">
							<div class="sale">20%
							</div>
							<div class="name-product">
								Bếp từ maboshi 2 mặt
							</div>
							<div class="row">
								<div class="final-price col-lg-4">
									129.000đ
								</div>
								<div class="first-price col-lg-4">
									165.000đ
								</div>
							</div>
						</a>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="product">
						<a href="{{route('product_detail')}}">
							<img class="image-product" src="images/bt1.jpg" alt="">
							<div class="sale">20%
							</div>
							<div class="name-product">
								Bếp từ maboshi 2 mặt
							</div>
							<div class="row">
								<div class="final-price col-lg-4">
									129.000đ
								</div>
								<div class="first-price col-lg-4">
									165.000đ
								</div>
							</div>
						</a>
						</div>
					</div>
				</div>
				<div class="row ">
					<div class="col-lg-4">
						<div class="product">
						<a href="{{route('product_detail')}}">
							<img class="image-product" src="images/bt1.jpg" alt="">
							<div class="sale">20%
							</div>
							<div class="name-product">
								Bếp từ maboshi 2 mặt
							</div>
							<div class="row">
								<div class="final-price col-lg-4">
									129.000đ
								</div>
								<div class="first-price col-lg-4">
									165.000đ
								</div>
							</div>
						</a>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="product">
						<a href="{{route('product_detail')}}">
							<img class="image-product" src="images/bt1.jpg" alt="">
							<div class="sale">20%
							</div>
							<div class="name-product">
								Bếp từ maboshi 2 mặt
							</div>
							<div class="row">
								<div class="final-price col-lg-4">
									129.000đ
								</div>
								<div class="first-price col-lg-4">
									165.000đ
								</div>
							</div>
						</a>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="product">
						<a href="{{route('product_detail')}}">
							<img class="image-product" src="images/bt1.jpg" alt="">
							<div class="sale">20%
							</div>
							<div class="name-product">
								Bếp từ maboshi 2 mặt
							</div>
							<div class="row">
								<div class="final-price col-lg-4">
									129.000đ
								</div>
								<div class="first-price col-lg-4">
									165.000đ
								</div>
							</div>
						</a>
						</div>
					</div>
				</div>
				<div class="row ">
					<div class="col-lg-4">
						<div class="product">
						<a href="{{route('product_detail')}}">
							<img class="image-product" src="images/bt1.jpg" alt="">
							<div class="sale">20%
							</div>
							<div class="name-product">
								Bếp từ maboshi 2 mặt
							</div>
							<div class="row">
								<div class="final-price col-lg-4">
									129.000đ
								</div>
								<div class="first-price col-lg-4">
									165.000đ
								</div>
							</div>
						</a>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="product">
						<a href="{{route('product_detail')}}">
							<img class="image-product" src="images/bt1.jpg" alt="">
							<div class="sale">20%
							</div>
							<div class="name-product">
								Bếp từ maboshi 2 mặt
							</div>
							<div class="row">
								<div class="final-price col-lg-4">
									129.000đ
								</div>
								<div class="first-price col-lg-4">
									165.000đ
								</div>
							</div>
						</a>
						</div>
					</div>
					<div class="col-lg-4">
						<div class="product">
						<a href="{{route('product_detail')}}">
							<img class="image-product" src="images/bt1.jpg" alt="">
							<div class="sale">20%
							</div>
							<div class="name-product">
								Bếp từ maboshi 2 mặt
							</div>
							<div class="row">
								<div class="final-price col-lg-4">
									129.000đ
								</div>
								<div class="first-price col-lg-4">
									165.000đ
								</div>
							</div>
						</a>
						</div>
					</div>
				</div>
				
					<ul class="tab">
						<li><a href="#" class="active">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#" class="vvsv">...</a></li>
						<li><a href="#">10</a></li>
						<li><a href="#">>></a></li>
					</ul>
				
			</div>
		</div>
	</div>
</main>

@endsection