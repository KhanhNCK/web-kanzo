@extends('master-layout')
@section('title')
Trang chủ
@endsection

@section('css')
<link rel="stylesheet" href="scss/home.css">
@endsection

@section('js')
<script>
    new WOW().init();
</script>
@endsection

@section('content')
<main>
    <!-- slider -->
    <section id="slider">
        <div id="carouselId" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselId" data-slide-to="0" class="active"></li>
                <li data-target="#carouselId" data-slide-to="1"></li>
                <li data-target="#carouselId" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img src="images/slide1.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img src="images/slide2.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img src="images/slide3.jpg" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </a>
            <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </a>
        </div>
    </section>
    <div class="container">
        <!-- images-hover -->
        <section>
            <div class="img_hover">
                <div class="hot">
                    <!-- <div class="cap-main">
						<h3>SẢN PHẨM NỔI BẬT</h3>
					</div> -->
                    <div class="hoverabc row">
                        <a href="{{route('product')}}"> <figure class="snip1477 col-md-4 wow fadeInLeft ">
                                <img class="img-fluid" src="images/slide1.jpg" alt="sample38" />
                                <div class="title">
                                    <div>
                                        <h4>Bếp ga âm</h4>
                                    </div>
                                </div>
                                <figcaption>
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatem modi laudantium
                                        sunt molestiae. Error, ipsa temporibus consequatur aperiam earum excepturi? Placeat
                                        rem ut minus dolorum veniam voluptate facilis minima eaque?</p>
                                </figcaption>
                                
                            </figure></a>
                       
                        <a href="{{route('product')}}"><figure class="snip1477 col-md-4 wow fadeInUp"><img class="img-fluid" src="images/slide1.jpg"
                            alt="sample91" />
                        <div class="title">
                            <div>
                                <h4>Bếp từ </h4>
                            </div>
                        </div>
                        <figcaption>
                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Saepe quas explicabo
                                pariatur molestiae provident porro est, obcaecati repellat, aliquid blanditiis
                                facilis magni neque laborum dolorem alias odio. Fuga, libero! Esse?</p>
                        </figcaption>
                      
                    </figure></a>
                        
                        <a href="{{route('product')}}"><figure class="snip1477 col-md-4 wow fadeInRight"><img class="img-fluid" src="images/slide1.jpg"
                            alt="sample35" />
                        <div class="title">
                            <div>
                                <h4>Máy hút mùi</h4>
                            </div>
                        </div>
                        <figcaption>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus non sit earum
                                asperiores quae accusantium nam corrupti doloremque dolor nemo odit nesciunt,
                                assumenda nisi quidem repellat vel laboriosam cum! Ipsum?
                            </p>
                        </figcaption>
                       
                    </figure></a>
                        
                    </div>
                </div>
            </div>
        </section>

        <!-- about -->
        <section class="h-about-wrap all-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">

                        <div class="h-about-left">

                            <div class="h-about-title mb-4 wow slideInLeft">

                                <h2 class="font-bold text-center color-blue">Giới Thiệu Về Công Ty</h2>

                            </div>

                            <div class="h-about-content mb-2  text-justify wow slideInLeft">

                                <p style="font-size: 15px;">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia assumenda, deleniti
                                    soluta voluptas odio esse quod tempore? Error quia, doloremque nostrum, nulla atque
                                    eos sint obcaecati aperiam quasi, ullam nisi!
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum delectus explicabo,
                                    incidunt non saepe quasi ullam perferendis unde veritatis atque, aut ab libero dicta
                                    est nobis odit accusamus ex suscipit?Lorem ipsum, dolor sit amet consectetur
                                    adipisicing elit. Eveniet libero dignissimos ratione perspiciatis consequatur ipsa
                                    voluptatem, nam repudiandae obcaecati tempora illo laboriosam quaerat saepe,
                                    quisquam itaque possimus dolor exercitationem quidem. Lorem, ipsum dolor sit amet
                                    consectetur adipisicing elit. Sequi dolores nam culpa corrupti ducimus, fugit ipsa
                                    quibusdam eveniet earum animi vero nesciunt corporis asperiores, non optio est?
                                    Beatae, repellat explicabo?
                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla unde sequi aliquid
                                    temporibus quo ut fugiat magnam impedit atque voluptatibus explicabo, cupiditate
                                    recusandae, reiciendis magni eaque. Ea porro laborum sequi.
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, ut. Tempora repellat
                                    expedita incidunt adipisci totam numquam corporis in, ipsum repudiandae magnam cum
                                    assumenda ut, laboriosam exercitationem, maiores quam. Aspernatur!
                                </p>

                                <a href="{{route('intro')}}" class="btn-detail" style="border-radius: none;">Xem thêm</a>

                            </div>

                        </div>

                    </div>
                    <div class="col-md-6">
                        <div id="demo" class="carousel slide" data-ride="carousel">
                            <ul class="carousel-indicators">
                                <li data-target="#demo" data-slide-to="0" class="active"></li>
                                <li data-target="#demo" data-slide-to="1"></li>
                                <li data-target="#demo" data-slide-to="2"></li>
                            </ul>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="images/slide1.jpg" style="height:315px;width:100%;object-fit: cover;">
                                </div>
                                <div class="carousel-item">
                                    <img src="images/slide1.jpg" style="height:315px;width:100%;object-fit: cover;">
                                </div>
                                <div class="carousel-item">
                                    <img src="images/slide1.jpg" style="height:315px;width:100%;object-fit: cover;">
                                </div>
                            </div>

                            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                                <span class="carousel-control-prev-icon"></span>
                            </a>

                            <a class="carousel-control-next" href="#demo" data-slide="next">
                                <span class="carousel-control-next-icon"></span>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <!-- product -->
        <section id="bepgas">
            <ul class="nav nav-tabs" role="tablist">
                <li class="tabname">
                    <h3><span>Các sản phẩn nổi bật của kanzo</span><i class="fas fa-chevron-right"></i></h3>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#bg1">Bếp ga âm</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#bg2">Bếp từ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#bg3">Máy hút mùi</a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div id="bg1" class="container tab-pane active">
                    <div class="row">
                        <div class="col-md-4 img-pro">
                            <a class="plus-zoom" href="{{route('product_detail')}}">
                                <img src="{{asset('images/beptu1.png')}}" alt="">
                            </a> </div>

                        <div class="col-md-8 ">
                            <div class="row ">
                                <div class="col-md-4 item">
                                    <a href="{{route('product_detail')}}">
                                        <img class="img-nd" src="{{asset('images/bt1.jpg')}}" alt=""></a>
                                    <span><img src="{{asset('images/openbox.png')}}" alt=""></span>
                                    <div class="title-item">
                                        <a href="{{route('product_detail')}}">
                                            <h4>Bếp từ Hitachi R-WX74J-X 735L</h4>
                                        </a>
                                        <p>15.000.000 <del>17.000.000</del></p>
                                    </div>
                                </div>
                                <div class="col-md-4 item">
                                    <a href="{{route('product_detail')}}">
                                        <img class="img-nd" src="{{asset('images/bt1.jpg')}}" alt=""></a>
                                    <span><img src="{{asset('images/openbox.png')}}" alt=""></span>
                                    <div class="title-item">
                                        <a href="{{route('product_detail')}}">
                                            <h4>Bếp từ Hitachi R-WX74J-X 735L</h4>
                                        </a>
                                        <p>15.000.000 <del>17.000.000</del></p>
                                    </div>
                                </div>
                                <div class="col-md-4 item">
                                    <a href="{{route('product_detail')}}">
                                        <img class="img-nd" src="{{asset('images/bt1.jpg')}}" alt=""></a>
                                    <span><img src="{{asset('images/openbox.png')}}" alt=""></span>
                                    <div class="title-item">
                                        <a href="{{route('product_detail')}}">
                                            <h4>Bếp từ Hitachi R-WX74J-X 735L</h4>
                                        </a>
                                        <p>15.000.000 <del>17.000.000</del></p>
                                    </div>
                                </div>
                                <div class="col-md-4 item">
                                    <a href="{{route('product_detail')}}">
                                        <img class="img-nd" src="{{asset('images/bt1.jpg')}}" alt=""></a>
                                    <span><img src="{{asset('images/openbox.png')}}" alt=""></span>
                                    <div class="title-item">
                                        <a href="{{route('product_detail')}}">
                                            <h4>Bếp từ Hitachi R-WX74J-X 735L</h4>
                                        </a>
                                        <p>15.000.000 <del>17.000.000</del></p>
                                    </div>
                                </div>
                                <div class="col-md-4 item">
                                    <a href="{{route('product_detail')}}">
                                        <img class="img-nd" src="{{asset('images/bt1.jpg')}}" alt=""></a>
                                    <span><img src="{{asset('images/openbox.png')}}" alt=""></span>
                                    <div class="title-item">
                                        <a href="{{route('product_detail')}}">
                                            <h4>Bếp từ Hitachi R-WX74J-X 735L</h4>
                                        </a>
                                        <p>15.000.000 <del>17.000.000</del></p>
                                    </div>
                                </div>
                                <div class="col-md-4 item">
                                    <a href="{{route('product_detail')}}">
                                        <img class="img-nd" src="{{asset('images/bt1.jpg')}}" alt=""></a>
                                    <span><img src="{{asset('images/openbox.png')}}" alt=""></span>
                                    <div class="title-item">
                                        <a href="{{route('product_detail')}}">
                                            <h4>Bếp từ Hitachi R-WX74J-X 735L</h4>
                                        </a>
                                        <p>15.000.000 <del>17.000.000</del></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


                <div id="bg2" class="container tab-pane fade">
                    <div class="row">
                        <div class="col-md-4 img-pro">
                            <a class="plus-zoom" href="{{route('product_detail')}}">
                                <img src="{{asset('images/beptu1.png')}}" alt="">
                            </a> </div>

                        <div class="col-md-8 ">
                            <div class="row ">
                                <div class="col-md-4 item">
                                    <a href="{{route('product_detail')}}">
                                        <img class="img-nd" src="{{asset('images/bt1.jpg')}}" alt=""></a>
                                    <span><img src="{{asset('images/openbox.png')}}" alt=""></span>
                                    <div class="title-item">
                                        <a href="{{route('product_detail')}}">
                                            <h4>Bếp từ Hitachi R-WX74J-X 735L</h4>
                                        </a>
                                        <p>15.000.000 <del>17.000.000</del></p>
                                    </div>
                                </div>
                                <div class="col-md-4 item">
                                    <a href="{{route('product_detail')}}">
                                        <img class="img-nd" src="{{asset('images/bt1.jpg')}}" alt=""></a>
                                    <span><img src="{{asset('images/openbox.png')}}" alt=""></span>
                                    <div class="title-item">
                                        <a href="{{route('product_detail')}}">
                                            <h4>Bếp từ Hitachi R-WX74J-X 735L</h4>
                                        </a>
                                        <p>15.000.000 <del>17.000.000</del></p>
                                    </div>
                                </div>
                                <div class="col-md-4 item">
                                    <a href="{{route('product_detail')}}">
                                        <img class="img-nd" src="{{asset('images/bt1.jpg')}}" alt=""></a>
                                    <span><img src="{{asset('images/openbox.png')}}" alt=""></span>
                                    <div class="title-item">
                                        <a href="{{route('product_detail')}}">
                                            <h4>Bếp từ Hitachi R-WX74J-X 735L</h4>
                                        </a>
                                        <p>15.000.000 <del>17.000.000</del></p>
                                    </div>
                                </div>
                                <div class="col-md-4 item">
                                    <a href="{{route('product_detail')}}">
                                        <img class="img-nd" src="{{asset('images/bt1.jpg')}}" alt=""></a>
                                    <span><img src="{{asset('images/openbox.png')}}" alt=""></span>
                                    <div class="title-item">
                                        <a href="{{route('product_detail')}}">
                                            <h4>Bếp từ Hitachi R-WX74J-X 735L</h4>
                                        </a>
                                        <p>15.000.000 <del>17.000.000</del></p>
                                    </div>
                                </div>
                                <div class="col-md-4 item">
                                    <a href="{{route('product_detail')}}">
                                        <img class="img-nd" src="{{asset('images/bt1.jpg')}}" alt=""></a>
                                    <span><img src="{{asset('images/openbox.png')}}" alt=""></span>
                                    <div class="title-item">
                                        <a href="{{route('product_detail')}}">
                                            <h4>Bếp từ Hitachi R-WX74J-X 735L</h4>
                                        </a>
                                        <p>15.000.000 <del>17.000.000</del></p>
                                    </div>
                                </div>
                                <div class="col-md-4 item">
                                    <a href="{{route('product_detail')}}">
                                        <img class="img-nd" src="{{asset('images/bt1.jpg')}}" alt=""></a>
                                    <span><img src="{{asset('images/openbox.png')}}" alt=""></span>
                                    <div class="title-item">
                                        <a href="{{route('product_detail')}}">
                                            <h4>Bếp từ Hitachi R-WX74J-X 735L</h4>
                                        </a>
                                        <p>15.000.000 <del>17.000.000</del></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div id="bg3" class="container tab-pane fade">
                    <div class="row">
                        <div class="col-md-4 img-pro">
                            <a class="plus-zoom" href="{{route('product_detail')}}">
                                <img src="{{asset('images/beptu1.png')}}" alt="">
                            </a> </div>

                        <div class="col-md-8 ">
                            <div class="row ">
                                <div class="col-md-4 item">
                                    <a href="{{route('product_detail')}}">
                                        <img class="img-nd" src="{{asset('images/bt1.jpg')}}" alt=""></a>
                                    <span><img src="{{asset('images/openbox.png')}}" alt=""></span>
                                    <div class="title-item">
                                        <a href="{{route('product_detail')}}">
                                            <h4>Bếp từ Hitachi R-WX74J-X 735L</h4>
                                        </a>
                                        <p>15.000.000 <del>17.000.000</del></p>
                                    </div>
                                </div>
                                <div class="col-md-4 item">
                                    <a href="{{route('product_detail')}}">
                                        <img class="img-nd" src="{{asset('images/bt1.jpg')}}" alt=""></a>
                                    <span><img src="{{asset('images/openbox.png')}}" alt=""></span>
                                    <div class="title-item">
                                        <a href="{{route('product_detail')}}">
                                            <h4>Bếp từ Hitachi R-WX74J-X 735L</h4>
                                        </a>
                                        <p>15.000.000 <del>17.000.000</del></p>
                                    </div>
                                </div>
                                <div class="col-md-4 item">
                                    <a href="">
                                        <img class="img-nd" src="{{asset('images/bt1.jpg')}}" alt=""></a>
                                    <span><img src="{{asset('images/openbox.png')}}" alt=""></span>
                                    <div class="title-item">
                                        <a href="{{route('product_detail')}}">
                                            <h4>Bếp từ Hitachi R-WX74J-X 735L</h4>
                                        </a>
                                        <p>15.000.000 <del>17.000.000</del></p>
                                    </div>
                                </div>
                                <div class="col-md-4 item">
                                    <a href="{{route('product_detail')}}">
                                        <img class="img-nd" src="{{asset('images/bt1.jpg')}}" alt=""></a>
                                    <span><img src="{{asset('images/openbox.png')}}" alt=""></span>
                                    <div class="title-item">
                                        <a href="{{route('product_detail')}}">
                                            <h4>Bếp từ Hitachi R-WX74J-X 735L</h4>
                                        </a>
                                        <p>15.000.000 <del>17.000.000</del></p>
                                    </div>
                                </div>
                                <div class="col-md-4 item">
                                    <a href="{{route('product_detail')}}">
                                        <img class="img-nd" src="{{asset('images/bt1.jpg')}}" alt=""></a>
                                    <span><img src="{{asset('images/openbox.png')}}" alt=""></span>
                                    <div class="title-item">
                                        <a href="{{route('product_detail')}}">
                                            <h4>Bếp từ Hitachi R-WX74J-X 735L</h4>
                                        </a>
                                        <p>15.000.000 <del>17.000.000</del></p>
                                    </div>
                                </div>
                                <div class="col-md-4 item">
                                    <a href="{{route('product_detail')}}">
                                        <img class="img-nd" src="{{asset('images/bt1.jpg')}}" alt=""></a>
                                    <span><img src="{{asset('images/openbox.png')}}" alt=""></span>
                                    <div class="title-item">
                                        <a href="{{route('product_detail')}}">
                                            <h4>Bếp từ Hitachi R-WX74J-X 735L</h4>
                                        </a>
                                        <p>15.000.000 <del>17.000.000</del></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </section>

        <!-- new -->
        <section id="tintuc">
            <div class="container">
                <div class="cap-main">
                    <h3 class="group__services-text">CẬP NHẬT TIN TỨC
                    </h3>
                </div>
                <div class="row">
                    <div class="col-md-4 ">
                        <a href="{{route('new')}}">
                            <div class="plus">
                                <img src="images/slide1.jpg" alt="">
                            </div>
                            <div class="cap-mat">
                                <h3>Giới thiệu về bếp kanzo</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa eos ratione repellendus
                                    aspernatur fuga iste facere. Mollitia illum unde sequi earum commodi, autem corporis
                                    repudiandae voluptatibus optio accusantium sint vitae!</p>
                            </div>
                        </a>
                        <div class="info">
                            <p><i class="far fa-calendar-alt"></i> <span>TH6 27,2019</span>&emsp;&emsp;<i
                                    class="far fa-comment"></i><span>Bình luận</span>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <a href="{{route('new')}}">
                            <div class="plus">
                                <img src="images/slide1.jpg" alt="">
                            </div>
                            <div class="cap-mat">
                                <h3>Giới thiệu về bếp kanzo</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa eos ratione repellendus
                                    aspernatur fuga iste facere. Mollitia illum unde sequi earum commodi, autem corporis
                                    repudiandae voluptatibus optio accusantium sint vitae!</p>
                            </div>
                        </a>
                        <div class="info">
                            <p><i class="far fa-calendar-alt"></i> <span>TH6 27,2019</span>&emsp;&emsp;<i
                                    class="far fa-comment"></i><span>Bình luận</span>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4 ">
                        <a href="{{route('new')}}">
                            <div class="plus">
                                <img src="images/slide1.jpg" alt="">
                            </div>
                            <div class="cap-mat">
                                <h3>Giới thiệu về bếp kanzo</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa eos ratione repellendus
                                    aspernatur fuga iste facere. Mollitia illum unde sequi earum commodi, autem corporis
                                    repudiandae voluptatibus optio accusantium sint vitae!</p>
                            </div>
                        </a>
                        <div class="info">
                            <p><i class="far fa-calendar-alt"></i> <span>TH6 27,2019</span>&emsp;&emsp;<i
                                    class="far fa-comment"></i><span>Bình luận</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </div>
</main>
@endsection