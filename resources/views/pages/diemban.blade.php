@extends('master-layout')
@section('title')
Điểm bán
@endsection

@section('css')
<link rel="stylesheet" type="text/css" href="css/stylett.css">
@endsection

@section('js')
<script>
	new WOW().init();
</script>
@endsection

@section('content')
<section>
	
<div class="container-fruid">
   <div class="h-category-banner">
  <h2 class="text-center" data-aos="fade-up" data-aos-delay="200" style="color: #fff;">HỆ THỐNG PHÂN PHỐI VÀ CÁC ĐẠI LÍ</h2>
  <div class="h-category-banner-black">

  </div>
</div>
  </div>
</section>
<section>
	<div class="diemban mt-4">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<div class="panel panel-primary" id="result_panel">
    <div class="panel-heading"><h4 class="panel-title" style="text-align: center;margin-bottom: 35px;">DANH SÁCH CÁC ĐẠI LÍ</h4>
    </div>
        <div class="scrollbar" id="style-10">
    	<div class="force-overflow">
        <ul class="list-group">
            <li class="list-group-item"><i class="fas fa-map-marker-alt"></i>Số 5 Cầy Giấy Hà nội</li>
            <li class="list-group-item"><i class="fas fa-map-marker-alt"></i>160 Tây Hồ Hà Nội</li>
            <li class="list-group-item"><i class="fas fa-map-marker-alt"></i> 62 Hoàn Kiếm  Hà Nội</li>
            <li class="list-group-item"><i class="fas fa-map-marker-alt"></i> 247 Thanh Xuân Hà Nội</li>
            <li class="list-group-item"><i class="fas fa-map-marker-alt"></i>91 Ba Đình Hà Nội 100000</li>
            <li class="list-group-item"><i class="fas fa-map-marker-alt"></i>2  Đống Đa Hà Nội</li>
            <li class="list-group-item"><i class="fas fa-map-marker-alt"></i> 247 Khương Trung, Thanh Xuân, Hà Nội</li>
            <li class="list-group-item"><i class="fas fa-map-marker-alt"></i> 62 Hoàn Kiếm  Hà Nội</li>
            <li class="list-group-item"><i class="fas fa-map-marker-alt"></i> 62 Hoàn Kiếm  Hà Nội</li>
        </ul>
    </div>
</div>
</div>
				</div>
				<div class="col-md-8">
					 <div class="alert alert-secondary">
                     <form class="search">
                     	 <input type="text" name="" class="btn" placeholder="Nhập địa chỉ tỉnh thành">
                     	 <input type="text" name="" class="btn" placeholder="Nhập  quận huyện">
                     	  <button type="button" class="btn" style="">Tìm kiếm</button>
                     </form>
                     </div>
                     <div class="container mapppp center" >
                     	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d141704.13895725342!2d105.74127730390492!3d21.044558412834085!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3bfcc2ab7f4a944e!2zxJDhuqFpIEzDvSBHYXMgxJDhu6ljIFRow6BuaA!5e0!3m2!1svi!2s!4v1573545633404!5m2!1svi!2s" width="100%" height="400px" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                     </div>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection