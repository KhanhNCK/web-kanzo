<nav>
	<div class="header-logo container">
		<div class="row">
			<div class="col-md-3 logo">
				<a href="{{route('home')}}"><img src="images/logo_kazo.png" alt="logo_kanzo"></a>
			</div>
			<div class="col-md-1"></div>
			<div class="col-md-8 row">
				<div class="col-md-4 a1">
					<div class="icon_ship row">
						<div class="ic col-md-3">
							<i class="fa fa-phone" aria-hidden="true"></i>
						</div>
						<div class="title col-md-8">
							<span>0123456789</span>
							<p>Hotline tư vấn miễn phí</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 a1">
					<div class="icon_ship row">
						<div class="ic col-md-3">
							<i class="fa fa-phone" aria-hidden="true"></i>
						</div>
						<div class="title col-md-8">
							<span>0123456789</span>
							<p>Hotline kinh doanh</p>
						</div>
					</div>
				</div>

				<div class="col-md-4 a1">
					<div class="icon_ship row">
						<div class="ic col-md-3">
							<i class="fa fa-car" aria-hidden="true"></i>
						</div>
						<div class="title col-md-8">
							<span>Miễn phí ship</span>
							<p>khu vực hà nội</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="menu">
		<div class="tool_bar_menu d-block d-md-none">
			<span class="open-menu"><i class="fa fa-bars"></i></span>
		</div>
		<div class="menu_mobile ">
			<div class="leftmenu d-block d-md-none ">
				<span class="ico d-block d-md-none">
					<a href="{{route('home')}}">
						<h2 style=" text-align: center; color: black"> Công ty TNHH KANZO</h2>
					</a>
					<span class="close-menu">

						<i class="fa fa-times-circle"></i>
					</span>
				</span>
				<ul>
					<li>
						<a href="#"><span>Trang chủ</span></a><i class="fa fa-angle-right"></i>
					</li>
					<li>
						<a href="{{route('intro')}}"><span>Giới thiệu</span></a><i class="fa fa-angle-right"></i>
					</li>

					<li>
						<a href="{{route('product')}}"><span> Sản phẩm </span></a> <i class="fa fa-angle-right"></i>
						<ul class="supmenu">
							<li><a href="{{route('product')}}"><span>Bếp ga âm</span></a></li>
							<li><a href="{{route('product')}}"><span>Bếp từ </span></a></li>
							<li><a href="{{route('product')}}"><span>Máy hút mùi</span></a></li>

						</ul>
					</li>

					<li>
						<a href="{{route('policy')}}"><span> Chính sách </span></a> <i class="fa fa-angle-right"></i>
						<ul class="supmenu">
							<li><a href="{{route('policy')}}"><span>Khuyến mãi </span></a></li>
							<li><a href="{{route('policy')}}"><span> Bảo hành</span></a></li>

						</ul>
					</li>

					<li>
						<a href="{{route('new')}}"><span> Tin tức </span></a><i class="fa fa-angle-right"></i>
					</li>

					<li>
						<a href="{{route('diemban')}}"><span> Điểm bán </span></a><i class="fa fa-angle-right"></i>
					</li>

					<li>
						<a href="{{route('contact')}}"><span> Liên hệ</span></a><i class="fa fa-angle-right"></i>
					</li>

				</ul>
			</div>
		</div>
		<div class="menu_desktop d-none d-md-block ">
			<nav>
				<div class="menu-wrap">
					<div class="container">
						<div class="menu">
							<div class="menu-right">
								<ul>
									<li><a href="{{route('home')}}"><i class="fa fa-home"></i>Trang chủ</a></li>
									<li><a href="{{route('intro')}}">Giới thiệu</a></li>
									<li class="menu-tier-2"><a href="{{route('product')}}">Sản phẩm <i
												class="fa fa-angle-down"></i></a>
										<ul class="submenu">
											<li><a href="{{route('product')}}">Bếp ga âm </a></li>
											<li><a href="{{route('product')}}">Bếp từ </a></li>
											<li><a href="{{route('product')}}">Máy hút mùi </a></li>
										</ul>
									</li>
									<li class="menu-tier-2 menu-tier-3"><a href="{{route('policy')}}">Chính sách<i
												class="fa fa-angle-down"></i></a>
										<ul class="submenu">
											<li><a href="{{route('product')}}">Khuyến mãi</a></li>
											<li><a href="{{route('product')}}">Bảo hành</a></li>

										</ul>
									</li>
									<li><a href="{{route('new')}}">Tin tức</a></li>
									<li><a href="{{route('diemban')}}">Điểm bán</a></li>
									<li><a href="{{route('contact')}}">Liên hệ</a></li>
								</ul>
							</div>
							<div class="menu-search">
								<div>
									<input type="text" placeholder="Nội dung tìm kiếm ...">
									<a href=""><i class="fa fa-search"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</nav>
		</div>
	</div>
</nav>