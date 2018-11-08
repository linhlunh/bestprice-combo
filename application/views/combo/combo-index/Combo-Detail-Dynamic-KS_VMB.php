<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="../../../../assets/js/myjs.js"></script>
    <script src="../../../../assets/css/bootstrap-3.3.7/js/bootstrap.min.js"></script>
    <script src="../../../../assets/lightGallery-master/lib/jquery.mousewheel.min.js"></script>
    <script src="../../../../assets/lightGallery-master/dist/js/lightgallery-all.min.js"></script>
    <link rel="stylesheet" href="../../../../assets//lightGallery-master/dist/css/lightgallery.css" rel="stylesheet">
    <link rel='stylesheet' type="text/css" href="../../../../assets/css/basic.css" />
    <link rel="stylesheet" href="../../../../assets/css/bootstrap-3.3.7/css/bootstrap.min.css">
    <link href="../../../../assets/datepicker/css/datepicker.css" rel="stylesheet" />


    <title>Index combo</title>
    <style>
        .background-container-detail .icon-location-black {
            background-position: -19px -881px;
            width: 16px;
            height: 19px;
            margin-top: -5px;
        }
        
        .icon {
            background-image: url('../../../../assets/img/icon/sprite@2x.101020181806.png');
        }
        
        .header-content {
            font-size: 24px;
            line-height: 44px;
            margin-left: 15px;
        }
        
        .mybtn-more {
            padding-left: 20px;
            padding-right: 20px;
            color: #179dfc;
            background-color: #fff;
            line-height: 31px;
            border: 1px #dcdcdc solid;
            border-radius: 2px
        }
        
        .myboder-content-combo {
            border: 1px #dcdcdc solid;
        }
        
        body {
            font-family: Arial, sans-serif;
            font-size:13px;
        }
        .col-left-check-rate-ks-ks-vmb,
        .col-check-rate-ks-ks-left,
        .col-check-rate-ks-ks-right{
            display: none;
        }
        .btn-order-combo-mobile{
            padding:0 20px 0 20px;line-height: 50px; font-size: 20px; background-color: #f67521;border: 0px; color: #fff; margin-top: 30px 
        }
        
        
        @media only screen and (max-width: 768px) {
            .hide-mobile,
            .img-slide .img-right,
            .title-header-combo,
            .price-combo-bottom,
            .file-support,
            .file-tab-combo-pc {
                display: none;
            }
            .file-tab-combo-mobile {
                display: block;
            }
            .file-similar {
                margin-top: 0px !important;
            }
            .img-slide .img-center {
                width: 100%;
                height: 100%;
            }
            .img-slide .img-bottom {
                width: 25% !important;
                height: 25% !important;
                float: left;
            }
            .img-bottom.img-bottom-4{
                display: block !important;
            }
            .box-img {
                margin-left: -15px;
                margin-right: -15px
            }
            .border-hightlight {
                border: 0px #6f6f6f solid !important;
                padding-left: 10px !important;
                padding-right: 10px !important;
                background-color: #f2f2f2 !important;
            }
            .border-hightlight .header-about-combo {
                background-color: #fff;
                padding:15px 10px 0px 10px;
            }
            .title-header-combo-mobile h3 {
                margin-bottom: 0px;
            }
            .price-box-bottom-mobile {
                background-color: #f2f2f2;
                margin-left: -10px;
                margin-right: -10px;
                margin-bottom: -10px;
                padding-top: 20px;
            }
            .price-combo-bottom-mobile {
                padding-bottom: 10px;
            }
            .background-container-detail {
                padding-bottom: 5px;
            }
            #flight_passenger {
                margin: 10px 10px 15px 0px !important;
                width: 100% !important;
            }
            .btn-check-rate {
                margin-bottom: 15px;
            }
            .icon-plush-mobile {
                margin: 15px 15px 15px 0px !important;
            }
            .check-rate.mobile-combo {
                border: 1px #e97100 solid;
            }
            .check-rate .title-rate-combo {
                color: #f8762a;
            }
            .price-combo-mobile {
                margin-top: 10px !important;
                text-align: center;
            }
            .price-combo-mobile .price-margin-right{
                margin-left:40px;
            }
            .btn-order-combo-mobile {
                margin: 0px 10px 15px 0px !important;
            }
            .btn-order-bottom {
                padding-top: 15px !important;
                padding-bottom: 5px !important;
            }
            .title-highlight-combo {
                width: 126px;
                color: #fff;
                background-color: #6e9c53;
                margin-top: -1px;
                margin-bottom: 10px;
                padding-left: 10px;
            }
            .highlights-combo {
                border: 1px #6e9c51 solid;
                padding-bottom: 10px;
                line-height: 30px !important;
            }
            .content-highlight-combo {
                margin-left: 5px;
            }
            .highlights-combo .arrow-right {
                width: 0;
                height: 0;
                border-style: solid;
                border-width: 18px 1px 18px 14px;
                border-color: transparent transparent transparent #6e9c53;
                position: absolute;
                top: 0;
                right: -15px;
            }
            .gach-ngang-chi-tiet-gia{
                border-bottom: 1px #e9e9e9 solid;
            }
            .popover {
                max-width: 50% !important;
                min-width: 0px !important;
                width: 50%;
            }
            .input-ngay-di,
            .input-ngay-ve {
                margin-top: 10px;
            }
            .icon-ngay-di,
            .icon-ngay-ve {
                top: 23px !important;
            }
            .info-rate .title-vmb{
                padding-top:0px !important;
                margin-top:-5px
            }
            .btn-more-info-hotel{
                padding-top:10px !important;
            }
            .similar-combo h3{
                font-size: 21px;
            }
            .btn-more-condition{
                padding-top:15px !important;
            }
            .uu-dai{
                margin-bottom: 10px !important;
                margin-top: 15px !important;
            }
        }
        
        @media only screen and (min-width: 768px) {

            .hide-on-pc,
            .title-header-combo-mobile,
            .file-tab-combo-mobile {
                display: none;
            }
            .price-combo-bottom-mobile {
                display: none;
            }
            .img-slide .img-center {
                width: 66.6666666666%;
                height: 66.6666666666%;
            }
            .background-container-detail {
                padding-bottom: 20px;
            }
            .overide-combo.container{
            width: 1181px;
            padding-left:1px;

        }
         
        }
        
        @media only screen and (min-width:992px) {
            .col-lg-8.col-left {
                width: 70.7%;
            }
            .col-lg-4.col-right {
                width: 29.3%;
            }
            .col-md-3.col-form-rate-left{
                width: 22%;
            }
    
            .col-md-3.col-form-rate-right{
                width: 28%;
            }
        }
        
        @media only screen and (min-width:1200px) {
            .col-lg-8.col-left {
                width: 70.7%;
            }
            .col-lg-4.col-right {
                width: 29.3%;
            }
            .col-lg-3.col-form-rate-left {
                width: 22%;
            }
    
    
            .col-lg-3.col-form-rate-right {
                width: 28%;
            }
        }
        
        .modal {
            z-index: 99999 !important;
        }
        
        .affix {
            top: 0;
            z-index: 99 !important;
            background-color: #fff;
            width: 100%;
        }
        /*Floating label input field */
    </style>
</head>
<body>
    <div>
        <?php $this->view('combo/combo-index/header_detail.php');?>
    </div>
    <div class="container overide-combo">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-left">
                <!-----------------Tab combo PC----------------->
                <div>
                    <div class='file-tab-combo-pc' data-spy="affix" data-offset-top="590">
                        <?php $this->view('combo/combo-index/tab_combo.html');?>
                    </div>
                </div>
                <div class="file-tong-quan">
                    <?php $this->view('combo/combo-index/tong_quan.html');?>
                </div>
                <!-----------------Check rate----------------->
                <div class='file-check-rate' style='padding-top:25px'>
                    <?php $this->view('combo/combo-index/check_rate.html');?>

                </div>
                <!-----------------Condition----------------->
                <div class='file-condition' style='padding-top:35px'>

                    <?php $this->view('combo/combo-index/condition.html');?>
                </div>
                <!-----------------Info hotel combo----------------->
                <div class='file-info-hotel-combo' style='padding-top:35px'>
                    <?php $this->view('combo/combo-index/info_hotel-combo.html');?>
                </div>
                <!-----------------Comment Facebook----------------->
                <div class='file-comment' style='padding-top:35px'>
                    <?php $this->view('combo/combo-index/review.html');?>

                </div>
                <div class='btn-order-bottom' style="text-align: center">
                    <button class="btn-order-combo-mobile">
                            Đặt ngay<span class="icon icon-arrow-circle-white-right"></span>
                    </button>
                </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-right file-support">
                <?php $this->view('combo/combo-index/support.html');?>
            </div>
        </div>
    </div>
    <div class='file-similar' style="margin-top:35px">
        <?php $this->view('combo/combo-index/similar.html') ?>
    </div>
</body>
</html>