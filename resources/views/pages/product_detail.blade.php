@extends('master-layout')
@section('title')
Chi tiết sản phẩm
@endsection

@section('css')
<link rel="stylesheet" href="scss/home.css">
<link rel="stylesheet" href="css/product-detail.css">
@endsection

@section('js')
<script>
	new WOW().init();

</script>
<script src="js/product-detail.js"></script>
@endsection

@section('content')
<main>
	<div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="card mb-10">
          <div class="card-header">
            <nav class="header-navigation">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                <li class="breadcrumb-item"><a href="#">Sản phẩm</a></li>
                <li class="breadcrumb-item"><a href="#">Chi tiết sản phẩm</a></li>
                <li class="breadcrumb-item active" aria-current="page">bếp từ abcxyz</li>
              </ol>
            </nav>
          </div>
          <div class="card-body store-body">
            <div class="product-info">
              <div class="product-gallery">
                <div class="product-gallery-thumbnails">
                  <ol class="thumbnails-list list-unstyled">
                    <li><img src="images/bt1.jpg" alt=""></li>
                    <li><img src="images/product-2.jpg" alt=""></li>
                  </ol>
                </div>
                <div class="product-gallery-featured">
                  <img src="images/bt1.jpg" alt="">
                </div>
              </div>
              <div class="product-seller-recommended">
                <h3 class="mb-5">Sản phẩm nổi bật</h3>
                <div class="recommended-items card-deck">
                  <div class="card">
                    <img src="images/bt1.jpg" alt="" class="card-img-top">
                    <div class="card-body">
                      <h5 class="card-title">126.000đ</h5>
                      <span class="text-muted"><small>bếp từ abcxyz</small></span>
                    </div>
                  </div>
                  <div class="card">
                    <img src="images/bt1.jpg" alt="" class="card-img-top">
                    <div class="card-body">
                      <h5 class="card-title">126.000đ</h5>
                      <span class="text-muted"><small>bếp từ abcxyz</small></span>
                    </div>
                  </div>
                  <div class="card">
                    <img src="images/bt1.jpg" alt="" class="card-img-top">
                    <div class="card-body">
                      <h5 class="card-title">126.000đ</h5>
                      <span class="text-muted"><small>bếp từ abcxyz</small></span>
                    </div>
                  </div>
                  <div class="card">
                    <img src="images/bt1.jpg" alt="" class="card-img-top">
                    <div class="card-body">
                      <h5 class="card-title">126.000đ</h5>
                      <span class="text-muted"><small>bếp từ abcxyz</small></span>
                    </div>
                  </div>
                </div>
                <!-- /.recommended-items-->
                <div class="product-description mb-5">
                  <h2 class="mb-5">Đặc trưng sản phẩm</h2>
                  <dl class="row mb-5">
                    <dt class="col-sm-3">Chất liệu</dt>
                    <dd class="col-sm-9">Đá inox</dd>
                    <dt class="col-sm-3">Kích thước</dt>
                    <dd class="col-sm-9">30 x 30(cm)</dd>
                    <dt class="col-sm-3">Số lượng</dt>
                    <dd class="col-sm-9"> 1 chiếc</dd>
          
                  </dl>
                  <h2 class="mb-5">Mô tả sản phẩm</h2>
                  <img src="images/product-3.jpg" class="mt-3 mb-5" alt="">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae maiores fuga repudiandae et temporibus nesciunt saepe illum quaerat, tenetur facilis quos enim ex praesentium adipisci, odio quo. Debitis, id architecto.</p>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae maiores fuga repudiandae et temporibus nesciunt saepe illum quaerat, tenetur facilis quos enim ex praesentium adipisci, odio quo. Debitis, id architecto.</p>
                </div>
                <div class="product-faq mb-5">
                  <h2 class="mb-3">Thông tin bạn quan tâm</h2>
                  <div class="main-questions d-inline" data-container="body" data-toggle="popover" data-placement="right" data-content="Are you in doubt? these shortcuts can help you!">
                    <a href="#" class="btn btn-outline-primary">Chi phí và thời gian giao hàng</a>
                    <a href="#" class="btn btn-outline-primary">Chính sách bảo hiểm</a>
                    <a href="#" class="btn btn-outline-primary">Hình thức thanh toán</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="product-payment-details">
              <h4 class="product-title mb-2">bếp từ abcxyz</h4>
              <h2 class="product-price display-4">126.000đ</h2>
              
              <p class="mb-0"><i class="fa fa-truck"></i>Giao hàng mọi nơi trên toàn quốc</p>
              <a href="#" class="text-muted mb-2"><small>Thời gian và hình thức vân chuyển </small></a>
              <input type="number" name="quantity" min="1" id="quant" class="form-control mb-5 input-lg" placeholder="Số lượng">
              <button class="btn btn-primary btn-lg btn-block">Đặt mua</button>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
@endsection