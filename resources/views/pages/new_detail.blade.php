@extends('master-layout')
@section('title')
Chi tiết tin tức
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
	<div class="banner-warp">
       <div class="banner">
            <div class="banner-member">
              <!--   <img src="images/anh-1.jpg" class="img-fluid"> -->
                <div class="banner-member-text">
                    <div class="container">
                        <div class="banner-member-text-title">
                            <h2 class="font-bold text-center text-banner" data-aos="fade-up" data-aos-delay="200">TIN
                                TỨC</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container ">
        <div class="row mt-5">
        <!-- <div class="col-md-3 mb-3" data-aos="fade-up" data-aos-delay="100">
        <ul class="list-group">
        <li class="list-group-item active text-center font-weight-bold">HÌNH ẢNH</li>
        <li class="list-group-item">
        <img src="http://www.ppivn.vn/userfiles/giaysanphamgiay_QWBM.jpeg" style="width: 100%" class="mt-3">
        <img src="http://hhppaper.com/image/data/hhppaper/slide/nh%20h%E1%BA%A3i%20ph%C3%B2ng.jpg" style="width: 100%" class="mt-3">
       <img src="http://hhppaper.com/image/data/hjghv.JPG" style="width: 100%" class="mt-3">
        <img src="http://hhppaper.com/image/data/ch%C3%A0o%20s%C3%A0n%20hhp/ed4716c1f553140d4d42.jpg" style="width: 100%" class="mt-3">
        </li>

        </ul>
        </div> -->


        <!-- cột 2 -->
            <div class="col-md-9 mb-3" data-aos="fade-up" data-aos-delay="300">
                <ul class="list-group">
                    <li class="list-group-item active text-center font-weight-bold">Đun nấu xong nhớ bỏ 3s làm việc này, vừa tiết kiệm 50% ga lại an toàn, chống cháy nổ</li>
                    <li class="list-group-item">
                        <style type="text/css">
                            .list-group-item img{
                                width: 100% !important;
                                height: auto !important;
                            }
                            .list-group-item p{
                            	font-weight: 600;
                            	padding: 5px 0 5px 0;
                            }
                            .list-group-item span{
                            	padding: 5px 0 0 0;
                            }
                        </style>
                         <p>Đây là những mẹo nhỏ nhưng không phải ai cũng biết giúp tiết kiệm ga cho gia đình.</p>
                        <span>
                        Hiện nay, bếp gas đang được sử dụng khá phổ biến, kể cả thành thị lẫn nông thôn. Tuy nhiên, việc sử dụng bếp gas tiết kiệm sao cho tiết kiệm được năng lượng nhất không phải ai cũng nắm rõ. Dưới đây là một số mẹo giúp người nội trợ sử dụng bếp gas một cách hiệu quả.
                       </span>
                       <p>1.Khóa bình ga sau khi nấu ăn</p>
                       <span style="margin-bottom: 5px;">
                      
                        Sau khi nấu ăn xong, bạn nên khóa bình gas lại. Một phần hạn chế được lượng gas bị thất thoát ra bên ngoài, một phần đảm bảo được an toàn cho người sử dụng, tránh được tình trạng rò rỉ gas, gây cháy nổ…
                        </span>
                        <img src="images/7.jpg" style="padding: 10px 30px 10px 30px">
                       <p>2.Không nên bật tắt bếp nhiều lần khi nấu</p>
                        <span>
                        	Trước khi bắt tay vào chế biến món ăn cho gia đình mình, bạn nên chuẩn bị sẵn đầy đủ nguyên liệu và lên kế hoạch mình sẽ nấu những món ăn gì. Có như vậy, khi bật bếp gas lên, bạn mới có thể cho thức ăn vào nồi nấu một cách liên tục được. Việc bật tắt bếp gas nhiều lần trong một lần nấu sẽ gây tốn gas.


                        </span>
                        <p>3.điều chỉnh ngọn lửa vừa phải</p>
                        <span>
                        	Trong khi nấu bạn hãy chú ý tới ngọn lửa, chỉ cần điều chỉnh núm bếp gas sao cho ngọn lửa vừa với đáy nồi là được. Ngọn lửa quá lớn vừa tốn gas mà món ăn của bạn lại lâu chín bởi lượng nhiệt thay vì tập trung vào đáy nồi lại bị phân tán ra xung quanh.
                        </span>
                        <img src="images/3.jpg" style="padding: 10px 30px 10px 30px">
                        <p>4.Tập trung khi nấu ăn không nên chú ý vào việc khác</p>
                        <span>
                        	Một số người có thói quen vừa nấu (đun nước, ninh cháo…) vừa làm việc khác như quét nhà, xem tivi... Và hầu hết đều quên cho tới khi nhớ ra thì một lượng gas đã tiêu hao uổng phí vì món ăn đã quá lửa, nước cạn, thậm chí cháy nồi. Vì thế hãy tập trung khi nấu.
                        </span>
                        <p>5.Thường xuyên vệ sinh bếp ga</p>
                        <span>
                        	Mỗi ngày sau khi nấu, bạn nên chùi rửa bếp gas, để những cặn bẩn không đọng lại làm bít các lỗ khí (đường dẫn gas). Nếu không chùi rửa thường xuyên, lỗ khí sẽ dễ bị bít khiến gas không ổn định, ngọn lửa không cháy đều dẫn tới nấu thức ăn lâu hơn và hao gas.


                        </span>
                    </li>

                </ul>
            </div>

            <!-- cột 3 -->
            <div class="col-md-3 tin-tuc-content" data-aos="fade-up" data-aos-delay="400">
                <ul class="list-group">
                    <li class="list-group-item text-center font-weight-bold"
                        style="background-color: #058ff7 ; color: white">TIN MỚI
                    </li>
                 
                        <li class="list-group-item">
                        <div class="row naa">
                            <div class="col-md-4 " style="padding:0">
                                
                                    <a href="">
                                        <img src="images/5.jpg" style="width: 100%">
                                    </a>
                               
                                    
                                
                            </div>
                            <div class="col-md-8" style="padding: 0 10px; font-size: 14px">
                                <a style="color: inherit;text-decoration: none;color: #505050;" href=""><span>Bếp ga Paloma PA-6MEJ siêu thị điện máy hc siêu thị hc</span></a>
                            </div>
                        </div>
                        <!-- <div class="row naa">
                            <div class="col-md-4 " style="padding:0">
                                
                                    <a href="">
                                        <img src="images/3.jpg" style="width: 100%">
                                    </a>
                               
                                    
                                
                            </div>
                            <div class="col-md-8" style="padding: 0 10px; font-size: 14px">
                                <a style="color: inherit;text-decoration: none;color: #505050;" href=""><span>Đun nấu xong nhớ bỏ 3s làm việc này, vừa tiết kiệm 50% ga lại an toàn, chống cháy nổ</span></a>
                            </div>
                        </div> -->
                    </li>
                    <li class="list-group-item">
                        <div class="row naa">
                            <div class="col-md-4 " style="padding:0">
                                
                                    <a href="">
                                        <img src="images/6.jpg" style="width: 100%">
                                    </a>
                               
                                    
                                
                            </div>
                            <div class="col-md-8" style="padding: 0 10px; font-size: 14px">
                                <a style="color: inherit;text-decoration: none;color: #505050;" href=""><span>Bếp ga Paloma PA-6MEJ siêu thị điện máy hc siêu thị hc</span></a>
                            </div>
                        </div>
                        <!-- <div class="row naa">
                            <div class="col-md-4 " style="padding:0">
                                
                                    <a href="">
                                        <img src="images/3.jpg" style="width: 100%">
                                    </a>
                               
                                    
                                
                            </div>
                            <div class="col-md-8" style="padding: 0 10px; font-size: 14px">
                                <a style="color: inherit;text-decoration: none;color: #505050;" href=""><span>Đun nấu xong nhớ bỏ 3s làm việc này, vừa tiết kiệm 50% ga lại an toàn, chống cháy nổ</span></a>
                            </div>
                        </div> -->
                    </li>
                    <li class="list-group-item">
                        <div class="row naa">
                            <div class="col-md-4 " style="padding:0">
                                
                                    <a href="">
                                        <img src="images/3.jpg" style="width: 100%">
                                    </a>
                               
                                    
                                
                            </div>
                            <div class="col-md-8" style="padding: 0 10px; font-size: 14px">
                                <a style="color: inherit;text-decoration: none;color: #505050;" href=""><span>Bếp ga Paloma PA-6MEJ siêu thị điện máy hc siêu thị hc</span></a>
                            </div>
                        </div>
                        <!-- <div class="row naa">
                            <div class="col-md-4 " style="padding:0">
                                
                                    <a href="">
                                        <img src="images/3.jpg" style="width: 100%">
                                    </a>
                               
                                    
                                
                            </div>
                            <div class="col-md-8" style="padding: 0 10px; font-size: 14px">
                                <a style="color: inherit;text-decoration: none;color: #505050;" href=""><span>Đun nấu xong nhớ bỏ 3s làm việc này, vừa tiết kiệm 50% ga lại an toàn, chống cháy nổ</span></a>
                            </div>
                        </div> -->
                    </li>
                    <li class="list-group-item">
                        <div class="row naa">
                            <div class="col-md-4 " style="padding:0">
                                
                                    <a href="">
                                        <img src="images/1.jpg" style="width: 100%">
                                    </a>
                               
                                    
                                
                            </div>
                            <div class="col-md-8" style="padding: 0 10px; font-size: 14px">
                                <a style="color: inherit;text-decoration: none;color: #505050;" href=""><span>Bếp ga Paloma PA-6MEJ siêu thị điện máy hc siêu thị hc</span></a>
                            </div>
                        </div>
                        <!-- <div class="row naa">
                            <div class="col-md-4 " style="padding:0">
                                
                                    <a href="">
                                        <img src="images/3.jpg" style="width: 100%">
                                    </a>
                               
                                    
                                
                            </div>
                            <div class="col-md-8" style="padding: 0 10px; font-size: 14px">
                                <a style="color: inherit;text-decoration: none;color: #505050;" href=""><span>Đun nấu xong nhớ bỏ 3s làm việc này, vừa tiết kiệm 50% ga lại an toàn, chống cháy nổ</span></a>
                            </div>
                        </div> -->
                    </li>
                    <li class="list-group-item">
                        <div class="row naa">
                            <div class="col-md-4 " style="padding:0">
                                
                                    <a href="">
                                        <img src="images/2.jpg" style="width: 100%">
                                    </a>
                               
                                    
                                
                            </div>
                            <div class="col-md-8" style="padding: 0 10px; font-size: 14px">
                                <a style="color: inherit;text-decoration: none;color: #505050;" href=""><span>Bếp ga Paloma PA-6MEJ siêu thị điện máy hc siêu thị hc</span></a>
                            </div>
                        </div>
                        <!-- <div class="row naa">
                            <div class="col-md-4 " style="padding:0">
                                
                                    <a href="">
                                        <img src="images/3.jpg" style="width: 100%">
                                    </a>
                               
                                    
                                
                            </div>
                            <div class="col-md-8" style="padding: 0 10px; font-size: 14px">
                                <a style="color: inherit;text-decoration: none;color: #505050;" href=""><span>Đun nấu xong nhớ bỏ 3s làm việc này, vừa tiết kiệm 50% ga lại an toàn, chống cháy nổ</span></a>
                            </div>
                        </div> -->
                    </li>
                    <li class="list-group-item">
                        <div class="row naa">
                            <div class="col-md-4 " style="padding:0">
                                
                                    <a href="">
                                        <img src="images/4.jpg" style="width: 100%">
                                    </a>
                               
                                    
                                
                            </div>
                            <div class="col-md-8" style="padding: 0 10px; font-size: 14px">
                                <a style="color: inherit;text-decoration: none;color: #505050;" href=""><span>Bếp ga Paloma PA-6MEJ siêu thị điện máy hc siêu thị hc</span></a>
                            </div>
                        </div>
                        <!-- <div class="row naa">
                            <div class="col-md-4 " style="padding:0">
                                
                                    <a href="">
                                        <img src="images/3.jpg" style="width: 100%">
                                    </a>
                               
                                    
                                
                            </div>
                            <div class="col-md-8" style="padding: 0 10px; font-size: 14px">
                                <a style="color: inherit;text-decoration: none;color: #505050;" href=""><span>Đun nấu xong nhớ bỏ 3s làm việc này, vừa tiết kiệm 50% ga lại an toàn, chống cháy nổ</span></a>
                            </div>
                        </div> -->
                    </li>
                  
                </ul>
            </div>

        </div>
    </div>
</section>

@endsection