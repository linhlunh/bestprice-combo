<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="../../../../assets/css/bootstrap-3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../../../../assets/nanogallery2-master/dist/jquery.nanogallery2.min.js"></script>
    
    <script src="../../../../assets/js/myjs.js"></script>
    <script src="../../../../assets/lightGallery-master/lib/jquery.mousewheel.min.js"></script>
    <script src="../../../../assets/lightGallery-master/dist/js/lightgallery-all.min.js"></script>

    <link rel="stylesheet" href="../../../../assets/css/bootstrap-3.3.7/css/bootstrap.min.css">

   
    <link rel="stylesheet" href="../../../../assets//lightGallery-master/dist/css/lightgallery.css">
    <link rel='stylesheet' type="text/css" href="../../../../assets/css/basic.css" />
    <link href="../../../../assets/nanogallery2-master/dist/css/nanogallery2.min.css" rel="stylesheet" type="text/css">
    <link href="../../../../assets/datepicker/css/datepicker.css" rel="stylesheet" />
    <link rel="stylesheet" href="../../../../assets/css/combo-css.css">

    <title>Index combo</title>
</head>
<body>
    <div>
        <?php $this->view('combo/combo-index/combo-parts/header_detail.php');?>
    </div>
    <div class="container overide-combo">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-left">
                <!-----------------Tab combo PC----------------->
                <div>
                    <div class='file-tab-combo-pc' data-spy="affix" data-offset-top="590">
                        <?php $this->view('combo/combo-index/combo-parts/tab_combo.html');?>
                    </div>
                </div>
                <div class="file-tong-quan">
                    <?php $this->view('combo/combo-index/combo-parts/tong_quan.html');?>
                </div>
                <!-----------------Check rate----------------->
                <div class='file-check-rate' style='padding-top:25px'>
                    <?php $this->view('combo/combo-index/combo-parts/check_rate.html');?>

                </div>
                <!-----------------Condition----------------->
                <div class='file-condition' style='padding-top:35px'>

                    <?php $this->view('combo/combo-index/combo-parts/condition.html');?>
                </div>
                <!-----------------Info hotel combo----------------->
                <div class='file-info-hotel-combo' style='padding-top:35px'>
                    <?php $this->view('combo/combo-index/combo-parts/info-hotel/info_hotel-combo.html');?>
                </div>
                <!-----------------Comment Facebook----------------->
                <div class='file-comment' style='padding-top:35px'>
                    <?php $this->view('combo/combo-index/combo-parts/review.html');?>

                </div>
                <div class='btn-order-bottom' style="text-align: center">
                    <button class="btn-order-combo-mobile">
                            Đặt ngay<span class="icon icon-arrow-circle-white-right"></span>
                    </button>
                </div>
            </div>
            <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-right file-support">
                <?php $this->view('combo/combo-index/combo-parts/support.html');?>
            </div>
        </div>
    </div>
    <div class='file-similar' style="margin-top:35px">
        <?php $this->view('combo/combo-index/combo-parts/similar.html') ?>
    </div>
</body>
</html>