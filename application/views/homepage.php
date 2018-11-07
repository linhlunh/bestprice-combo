<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel='stylesheet' type="text/css" href="../../assets/css/bootstrap-3.3.7/css/bootstrap.min.css" />

    <script src="../../assets/css/bootstrap-3.3.7/js/bootstrap.min.css"></script>

    <link rel='stylesheet' type="text/css" href="../../assets/css/basic.css" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Document</title>
    <script>
    </script>
    <style>
        .color-black {
            color: #000000;
        }
        
        .mySlides {
            width: 100%;
        }
        
        .top-contain {
            display: inline-block;
        }
        
        nav div ul li a {
            font-size: 14px;
        }
        
        nav div ul li span {
            font-size: 14px;
        }
        
        body {
            font-size: 13px;
        }
        .nav-home .navbar .navbar-nav li {
            height: 34px;
        }
        .nav-home .navbar .navbar-nav li a:hover {
            background-color: #0071cd;
            color: #fff;
        }
        .nav-home .navbar .navbar-nav li.active a {
            background-color: #0071cd;
            color: #fff;
        }
        .nav-home .navbar .navbar-nav li .hover-combo:hover {
            background-color: #fe8802;
            color: #fff;
        }
        .nav-home .navbar .navbar-nav li a:hover .icon-home {
            background-position:-128px -370px;
        }
        .nav-home .navbar .navbar-nav li a:hover .icon-flight-up {
            background-position:-125px -411px;
        }
        .nav-home .navbar .navbar-nav li a:hover .icon-hotel {
            background-position:-126px -392px
        }
        .nav-home .navbar .navbar-nav li a:hover .icon-combo {
            background-position:-125px -612px;
        }
        .nav-home .navbar .navbar-nav li a:hover .icon-cruise {
            background-position:-126px -324px;
        }
        .nav-home .navbar .navbar-nav li a:hover .icon-tour {
            background-position:-95px -192px;
        }
        

        
    </style>
</head>
          
<body style="border-top: 3px solid #fe8802;">
    <!----------------------Header----------------------->
    <header>
        <div class='container'>
            <div class='row header-desktop'>
                <a href='#'>
                    <img src='https://owa.bestprice.vn/assets/img/bestpricevn-logo.13092017.png' />
                </a>
                <div class='pull-right text-right div-right'>
                    <div style="margin-top:10px">
                        <a href="#">Cẩm nang du lịch</a>
                        <span class='margin-right-5 margin-left-5'>|</span>
                        <a href='#'>Giới thiệu</a>
                        <span class='margin-right-5 margin-left-5'>|</span>
                        <a href='#'>Liên hệ</a>
                    </div>
                    <div style="margin-top:10px">
                        <span class='icon icon-cal-center-special'></span>
                        <span class=''>1900 6505</span>
                        <span class='space'>-</span>
                        <span class=''>(024/028) 73072605</span>
                    </div >
                    <div style="margin-top:10px">Thời gian làm việc từ <b>08:00</b> đên <b>22:00</b></div>
                </div>
            </div>
            <script>
                $( '#topheader .navbar-nav a' ).on( 'click', function () {
	                $( '#topheader .navbar-nav' ).find( 'li.active' ).removeClass( 'active' );
	                $( this ).parent( 'li' ).addClass( 'active' );
                });
            </script>
            <div class="row">
                <div id='topheader' class='nav-home'>
                    <nav class="navbar navbar-insverse">
                    <div class="container-fluid">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href='#'><span class="icon icon-home"></span>Trang chủ</a></li>
                            <li><a href='#'><span class="icon icon-flight-up"></span>Vé máy bay</a></li>
                            <li><a href='#'><span class="icon icon-hotel"></span>Khách sạn</a></li>
                            <li><a  href='#'><span class="icon icon-tour"></span>Tour du lịch</a></li>
                            <li><a class="hover-combo" href='#'><span class="icon icon-combo"></span>Combo khuyến mại</a></li>
                            <li><a href='#'><span class="icon icon-cruise"></span>Du thuyền Hạ Long</a></li>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#"><label>...</label></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Vinpearl</a></li>
                                    <li><a href="#">Ba na hill</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!----------------------Content----------------------->
    <article style="position:relative">

        <div>
            <div style="z-index:2; position:absolute; margin-top:20px; margin-left:174px">
                <?php $this->view('boxsearch.html');?>
            </div>
            <div style="z-index:1; ">
                <?php $this->view('slide.html');?>
            </div>

        </div>
        <div class='container'>
            <div class='row margin-top-10 col-why-us-main'>
                <div class="col-md-4">
                    <div class="box-why-us">
                        <div class='col-why-us-1'>
                            <span class='icon-why-us-1 icon-why-us'></span>
                        </div>
                        <div class="col-why-us-2">
                            <h4 style="color: blue">Luon co gia tot</h4>
                            <span>Với nhiều khuyến mại, ưu đãi hấp dẫn, khách hàng sẽ đặt được dịch vụ có giá tốt nhất.</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class='col-why-us-1'>
                        <span class='icon-why-us-2 icon-why-us'></span>
                    </div>
                    <div class="col-why-us-2 text-left">
                        <h4 style="color: blue">Đảm bảo chất lượng</h4>
                        <span>Liên kết chặt chẽ với các đối tác, khảo sát định kỳ để đảm bảo chất lượng tốt nhất.</span>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class='col-why-us-1'>
                        <span class='icon-why-us-3 icon-why-us'></span>
                    </div>
                    <div class="col-why-us-2">
                        <h4 style="color: blue">Hỗ trợ tận tình - chu đáo</h4>
                        <span class='hidden-xs'>Đặt lợi ích khách hàng lên trên hết, chúng tôi hỗ trợ khách hàng nhanh và chính xác nhất.</span>
                    </div>
                </div>
            </div>
            <div class="row margin-top-20">
                <div class="col-md-4 col-sm-4 item">
                    <img src="https://owa.bestprice.vn/images/slide/home-page-ad-01-5bbdc10b69c62.jpg" />
                </div>
                <div class="col-md-4 col-sm-4 item">
                    <img src="https://owa.bestprice.vn/images/slide/home-page-ad-02-5b32e9b3b1306.png" />
                </div>
                <div class="col-md-4 col-sm-4 item">
                    <img src="https://owa.bestprice.vn/images/slide/home-page-ad-03-5b10babeb2388.png" />
                </div>
            </div>
            <div style='backgroud:#faf8f9;'>
                <div class='row margin-top-10 list-deal-home'>
                    <div class=''>
                        <div>
                            <h3>
                                <span class='icon icon-best-deal-home margin-right-5'></span> Khuyến mại HOT thang 10
                            </h3>
                        </div>
                    </div>
                    <div class='row' >
                        <nav class='navbar'>
                            <div class='container' style="border-bottom: 1px solid #fe8802;margin-bottom:10px;">
                                <ul class='nav navbar-nav'>
                                    <li class="list-tab" id="tab_1" onclick="display_detail(1)" style="margin-left:10px;"><span>VÉ MÁY BAY</span></li>
                                    <li class="list-tab" id="tab_2" onclick="display_detail(2)" style="margin-left:50px;"><span>KHÁCH SẠN</span></li>
                                    <li class="list-tab" id="tab_3" onclick="display_detail(3)" style="margin-left:50px;"><span>TOUR DU LỊCH</span></li>
                                    <li class="list-tab" id="tab_4" onclick="display_detail(4)" style="margin-left:50px;"><span>DU THUYỀN HẠ LONG</span></li>
                                    <li class="list-tab" id="tab_5" onclick="display_detail(5)" style="margin-left:50px;"><span>COMBO KHUYẾN MẠI</span></li>
                                    <li class="list-tab" id="tab_6" onclick="display_detail(6)" style="margin-left:50px;"><span>VINPEARL</span></li>
                                </ul>
                            </div>
                        </nav>
                    </div>


                    <script>
                        function display_detail(n) {
                            var i;
                            var tab_body = $('.list-tab');
                            var list_detail = $('.list-detail');
                            list_detail.hide();
                            tab_body.css('border-bottom','0px solid #fe8802');                         
                            $('#list_detail_' + n).show();
                            $('#tab_'+n).css('border-bottom','3px solid #fe8802');
                        }
                        $(document).ready(function() {
                            var list_detail = $('.list-detail');
                            list_detail.hide();
                            $('#list_detail_2').show();
                            $('#tab_2').css('border-bottom','3px solid #fe8802');
                        });                       
                    </script>

                </div>
                <div class='row list-detail' id='list_detail_1'>
                    <div class='col-md-4'>
                        <a href='#'><img class='img-responsive' src='https://owa.bestprice.vn/images/destinations/large/ho-chi-minh-5437461b24c2c-650x365.jpg' /></a>
                    </div>
                    <div class='col-md-4'>
                        <a href='#'><img class='img-responsive' src='https://owa.bestprice.vn/images/destinations/large/ha-noi-5bb2cbb56330f-650x365.jpg' /></a>
                    </div>
                    <div class='col-md-4'>
                        <a href='#'><img class='img-responsive' src='https://owa.bestprice.vn/images/destinations/large/da-nang-542bac67e1088-650x365.jpg' /></a>
                    </div>
                </div>
                <div class='row list-detail' id='list_detail_2'>
                    <div class='col-md-4'>
                        <a href='#'><img class='img-responsive' src='https://owa.bestprice.vn/images/destinations/large/ho-chi-minh-5437461b24c2c-650x365.jpg' /></a>
                    </div>
                    <div class='col-md-4'>
                        <a href='#'><img class='img-responsive' src='https://owa.bestprice.vn/images/destinations/large/ho-chi-minh-5437461b24c2c-650x365.jpg' /></a>
                    </div>
                    <div class='col-md-4'>
                        <a href='#'><img class='img-responsive' src='https://owa.bestprice.vn/images/destinations/large/ho-chi-minh-5437461b24c2c-650x365.jpg' /></a>
                    </div>
                </div>
                <div class='row list-detail' id='list_detail_3'>

                    <div class='col-md-4'>
                        <a href='#'><img class='img-responsive' src='https://owa.bestprice.vn/images/destinations/large/ha-noi-5bb2cbb56330f-650x365.jpg' /></a>
                    </div>
                    <div class='col-md-4'>
                        <a href='#'><img class='img-responsive' src='https://owa.bestprice.vn/images/destinations/large/da-nang-542bac67e1088-650x365.jpg' /></a>
                    </div>
                    <div class='col-md-4'>
                        <a href='#'><img class='img-responsive' src='https://owa.bestprice.vn/images/destinations/large/ho-chi-minh-5437461b24c2c-650x365.jpg' /></a>
                    </div>
                </div>

                <div class='row'>
                    <div class='col-xs-12 text-center'>
                        <a class='btn btn-default btn-border-blue' style='border-width:1px; border-style:solid;margin-top:20px' href='#'>Xem thêm</a>
                    </div>
                </div>
                <div class='row' style="font-size: 20px">
                    <div class='col-md-12'>
                        <span class='icon icon-circle-outbound'></span>Du lịch nước ngoài
                    </div>
                </div>
                <div class='row' style='padding-top: 30px'>
                    <div class='col-md-2'>
                        <a class='color-black font-size-14' href='#'>Du lịch Thái Lan</a>
                        <br/>
                        <a class='color-black font-size-14' style='margin-top:100px;' href=''>Du lịch Dubai</a>
                    </div>
                    <div class='col-md-2'>
                        <a class='color-black font-size-14' href='#'>Du lịch Singapore</a>
                        <br/>
                        <div class='col-cat'>
                            <a class='color-black font-size-14' href=''>Du lịch Hà Lan</a>
                        </div>
                    </div>
                    <div class='col-md-2'>
                        <a class='color-black font-size-14' href='#'>Du lịch Malaysia</a>
                        <br/>
                        <a class='color-black font-size-14' href=''>Du lịch Nhật Bản</a>
                    </div>
                    <div class='col-md-2'>
                        <a class='color-black font-size-14' href='#'>Du lịch Hàn Quốc</a>
                        <br/>
                        <a class='color-black font-size-14' href=''>Du lịch Nhật Bản</a>
                    </div>
                    <div class='col-md-2'>
                        <a class='color-black font-size-14' href='#'>Du lịch Nhật Bản</a>
                        <br/>
                        <a class='color-black font-size-14' href=''>Du lịch Nhật Bản</a>
                    </div>
                    <div class='col-md-2'>
                        <a class='color-black font-size-14' href='#'>Du lịch Thái Lan</a>
                        <br/>
                        <a class='font-size-14' href=''>Xem tất cả</a>
                    </div>
                </div>

                <hr/>

                <div class='row' style="font-size: 20px">
                    <div class='col-md-12'>
                        <span class='icon icon-circle-outbound'></span>Du lịch nước ngoài
                    </div>
                </div>
                <div class='row' style='padding-top: 30px'>
                    <div class='col-md-2'>
                        <a class='color-black font-size-14' href='#'>Du lịch Thái Lan</a>
                        <br/>
                        <a class='color-black font-size-14' style='margin-top:100px;' href=''>Du lịch Dubai</a>
                    </div>
                    <div class='col-md-2'>
                        <a class='color-black font-size-14' href='#'>Du lịch Singapore</a>
                        <br/>
                        <div class='col-cat'>
                            <a class='color-black font-size-14' href=''>Du lịch Hà Lan</a>
                        </div>
                    </div>
                    <div class='col-md-2'>
                        <a class='color-black font-size-14' href='#'>Du lịch Malaysia</a>
                        <br/>
                        <a class='color-black font-size-14' href=''>Du lịch Nhật Bản</a>
                    </div>
                    <div class='col-md-2'>
                        <a class='color-black font-size-14' href='#'>Du lịch Hàn Quốc</a>
                        <br/>
                        <a class='color-black font-size-14' href=''>Du lịch Nhật Bản</a>
                    </div>
                    <div class='col-md-2'>
                        <a class='color-black font-size-14' href='#'>Du lịch Nhật Bản</a>
                        <br/>
                        <a class='color-black font-size-14' href=''>Du lịch Nhật Bản</a>
                    </div>
                    <div class='col-md-2'>
                        <a class='color-black font-size-14' href='#'>Du lịch Thái Lan</a>
                        <br/>
                        <a class='font-size-14' href=''>Xem tất cả</a>
                    </div>
                </div>



            </div>
            <div class='' style="background: #689540; color:#fff; margin-top:20px; padding: 15px; position: relative;">

                <img style="position: absolute;" class='img-circle' src='https://www.bestprice.vn/assets/img/giai-thuong.png' />

                <div class="content" style=' padding-left: 120px;'>
                    <div style='width:62%'>
                        <h3>BESTPRICE VÀ NHỮNG THÀNH TỰU</h3><br/>
                        <span style='font-size:15px; margin-top: 0px'>
                                Với sự nỗ lực không ngừng nghỉ, BestPrice ngày càng được nhiều khách hàng tin tưởng,

                                ủng hộ và vinh dự đạt được những thành tựu xuât sắc.
                            </span>
                    </div>
                </div>

                <a style="position: absolute; right: 40px; top: 43px;" class="btn btn-yellow" href="#">
                    <h4>Giới thiệu về BestPrice</h4>
                </a>

            </div>
        </div>
        <div style="background: #f1f1f1; margin-top:20px">
            <div class='container'>
                <div style="margin: 20px;display: flex; justify-content: center; align-items: center;">
                    <h4 style="display: inline-block; margin-right:20px">Đăng ký nhận khuyến mại</h4>
                    <input style="display: inline-block; width: 20%" type="search" name="" id="input" class="form-control" value="" required="required" title="">

                    <button style="display: inline-block; width: 10%" type="button" class="btn btn-green">Đăng ký</button>
                </div>
            </div>
        </div>
    </article>
    <!-----------------------Footer---------------------->

    <footer>
        <div>
            <div class='container'>
                <div class='row' style='background: #023260; color: #fff'>

                    <div style='padding:15px' class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                        <h5>Công ty du lịch BestPrice</h5>

                        <div class="row" style='padding: 5px'>

                            <div style='color: #fff' class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                <a style='color: #fff; font-size:12px' href='#'>
                                    <span style='color: #fe8802' class='glyphicon glyphicon-triangle-right'></span>
                                    <span style='color: #fff'>Về chúng tôi</span>
                                </a><br/>
                                <a style='color: #fff ; font-size:12px;' href='#'>
                                    <span style='color: #fe8802' class='glyphicon glyphicon-triangle-right'></span>
                                    <span style='color: #fff'>Liên hệ</span>
                                </a><br/>
                                <a href='#'>
                                    <span style='color: #fe8802' class='glyphicon glyphicon-triangle-right'></span>
                                    <span style='color: #fff; font-size:12px'>Hỏi đáp</span>
                                </a><br/>
                                <a href='#'>
                                    <span style='color: #fe8802' class='glyphicon glyphicon-triangle-right'></span>
                                    <span style='color: #fff; font-size:12px'>Điều khoản và điều kiện</span>
                                </a>
                                <a href='#'>
                                    <span style='color: #fe8802' class='glyphicon glyphicon-triangle-right'></span>
                                    <span style='color: #fff; font-size:12px'>Tuyển dụng</span>
                                    <span class='icon icon-hot-red'></span>
                                </a>
                            </div>

                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                <a href='#'>
                                    <span style='color: #fe8802' class='glyphicon glyphicon-triangle-right'></span>
                                    <span style='color: #fff; font-size:12px'>Về chúng tôi</span>
                                </a><br/>
                                <a href='#'>
                                    <span style='color: #fe8802' class='glyphicon glyphicon-triangle-right'></span>
                                    <span style='color: #fff; font-size:12px'>Liên hệ</span>
                                </a><br/>
                                <a href='#'>
                                    <span style='color: #fe8802' class='glyphicon glyphicon-triangle-right'></span>
                                    <span style='color: #fff; font-size:12px'>Hỏi đáp</span>
                                </a><br/>
                                <a href='#'>
                                    <span style='color: #fe8802' class='glyphicon glyphicon-triangle-right'></span>
                                    <span style='color: #fff; font-size:12px'>Điều khoản và điều kiện</span>
                                </a>
                            </div>


                        </div>

                    </div>

                    <div style='padding: auto; font-size:13px; margin-top:20px' class=" col-xs-4 col-sm-4 col-md-4 col-lg-4">
                        Giấy phép kinh doanh số: 0104679428.
                        <br/> Ngày cấp: 26/05/2010.
                        <br/> Nơi cấp: Sở KH & ĐT TP Hà Nội.
                        <br/>
                        <br/>
                        <a style='color: #fff; font-size:13px' href='#'>Giấy phép kinh doanh Lữ Hành Quốc Tế số: 01-702/2015/TCDL-GPLHQT</a> - Được cấp bởi Tổng Cục Du Lịch Việt Nam.
                    </div>

                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">

                        <div class="row padding-10">

                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                                <a href='#'><span class='icon-tt-2 thanh-tuu-2-vin'></span></a>
                                <a href='#'><span class='icon-tt-2 thanh-tuu-2-operator'></span></a>
                            </div>
                            <a href='#'><span class='icon-tt-2 thanh-tuu-2-trip'></span></a>
                            <a href='#'><span class='icon-tt-2 thanh-tuu-2-brand'></span></a>
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

                            </div>


                        </div>
                    </div>
                </div>


                <div class="row" style='background: #f1f1f1'>
                    <div style='padding-top:20px;' class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <div>
                            <span>Hà Nội:12A, Ngõ Bà Triệu (gần Vincom Bà Triệu), Phố Bà Triệu, Quận Hai Bà Trưng, Hà Nội.</span>
                            <br/>
                            <div style="margin-top:10px">
                                <span class='icon icon-phone-blue'></span>
                                <span style='color: #3385d6'>(028) 7307 2605</span>
                                <span class='icon icon-adress-blue' style="margin-left:35px"></span>
                                <span style='color: #3385d6'>Xem bản đồ</span>
                            </div>
                        </div>
                        <div style='margin-top:10px; margin-bottom: 20px'>
                            <span>Hồ Chí Minh:95 Trần Quang Khải, Tân Định, Quận 1, Hồ Chí Minh.</span>
                            <br/>
                            <div style="margin-top:10px">
                                <span class='icon icon-phone-blue'></span>
                                <span style='color: #3385d6'>(028) 7307 2605</span>
                                <span class='icon icon-adress-blue' style="margin-left:35px"></span>
                                <span style='color: #3385d6'>Xem bản đồ</span>
                            </div>
                        </div>
                    </div>

                    <div style='padding-top:20px' class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        <div>
                            <span>Hải Phòng:Số 32, đường 208, Cái Tắt, An Đồng, An Dương, Hải Phòng.</span>
                            <br/>
                            <div style="margin-top:10px">
                                <span class='icon icon-phone-blue'></span>
                                <span style='color: #3385d6'>(028) 7307 2605</span>
                                <span class='icon icon-adress-blue' style="margin-left:35px"></span>
                                <span style='color: #3385d6'>Xem bản đồ</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class='row' style='margin-top:30px;margin-bottom:30px'>

                    <div class="">
                        <ul class="nav navbar-nav">
                            <li class="active">
                                <a style="font-size: 14px" href="#">Trang chủ</a>
                            </li>
                            <li>
                                <a style="font-size: 14px" href="#">Vé máy bay</a>
                            </li>
                            <li>
                                <a style="font-size: 14px" href="#">Khách sạn</a>
                            </li>
                            <li>
                                <a style="font-size: 14px" href="#">Tour du lịch</a>
                            </li>
                            <li>
                                <a style="font-size: 14px" href="#">Combo khuyến mại</a>
                            </li>
                            <li>
                                <a style="font-size: 14px" href="#">Du thuyền Hạ Long</a>
                            </li>
                            <li>
                                <a style="font-size: 14px" href="#">Vinpearl</a>
                            </li>
                        </ul>
                    </div>

                </div>

                <hr/>


                <div class="row" style="padding-bottom: 20px">

                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                        Chúng tôi chấp nhận
                        <span class='icon icon-cc-visa'></span>
                        <span class='icon icon-cc-mastercard'></span>
                        <span class='icon icon-cc-jcb'></span>
                        <span class='icon icon-cc-unionpay'></span>
                        <span class='icon icon-cc-onepay'></span>
                        <span class='icon icon-license-footer'></span>
                    </div>

                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6" style='padding-left:300px'>
                        <div style='margin-right:0px'>
                            <a href='#'><span class='icon icon-tripadvisor'></span></a>
                            <a href='#'><span class='icon icon-zalo'></span></a>
                            <a href='#'><span class='icon icon-facebook'></span></a>
                            <a href='#'><span class='icon icon-google-plus'></span></a>
                            <a href='#'><span class='icon icon-pinterest'></span></a>
                            <a href='#'><span class='icon icon-twitter'></span></a>
                        </div>
                    </div>


                </div>


            </div>

    </footer>
</body>

</html>