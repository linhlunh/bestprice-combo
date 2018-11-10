<style>
    .nGY2GThumbnail:nth-child(4) .nGY2GThumbnailCustomLayer {
        background-color: #000;
        opacity: 0.5;
    }
    
    .nGY2GThumbnail:nth-child(4) .nGY2GThumbnailLabel {
        bottom: 35% !important;
    }
    
    .show-img {
        position: relative;
    }
    
    .show-img .icon-youtube {
        cursor: pointer;
        position: absolute;
        top: 45%;
        left: 50%;
    }
    
    .thumbnail-youtube {
        background-image: url(https://owa.bestprice.vn/images/combos/uploads/combo-nghi-duong-mua-thu-phu-quoc-tai-vinoasis-3n2d-bao-gom-ve-may-bay-khu-hoi-5bbdc05598bf8.jpg);
        position: absolute;
        top: 0;
        left: 0;
        width: 660px;
        height: 470px;
        z-index: 999;
        margin-top: 2px;
    }
    
    .iframe-youtube {
        display: none;
    }
</style>
<div class='show-img'>
    <div class='thumbnail-youtube'>
        <iframe class='iframe-youtube' width="660" height="470" src="https://www.youtube.com/embed/SPn106LGnjU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <span class='icon-youtube'></span>
    </div>
    <div id="nanogallery2" style="max-width: 818px">
    </div>
</div>

<script>
    var listImg = [];

    //Load data form controller test using ajax
    function addImgToVar(_var, imgs) {
        $.each(imgs, function(key, item) {
            _var.push({
                src: (item['type'] != 1) ? item['src'].replace('embed/', 'watch?v=') : item['full_src'],
                srct: item['full_src'],
                type: (item['type'] != 1) ? 'video' : 'img',
                title: '',
            });
        });
        _var[0]['srct'] = imgs[0]['full_src'];
    }
    $.ajax({
        url: 'loadimg',
        type: 'get',
        dataType: 'json',
        data: {},
        success: function(result) {
            addImgToVar(listImg, result);
        }
    });
    //End

    //Nanogalerry
    
    function showImgCombo(data){
        jQuery(document).ready(function() {
        var locationImg = [{
            c: 1,
            r: 1,
            w: 0,
            h: 0
        }, {
            c: 662,
            r: 1,
            w: 158,
            h: 156
        }, {
            c: 662,
            r: 158,
            w: 158,
            h: 156
        }, {
            c: 662,
            r: 315,
            w: 158,
            h: 156
        }];

        $('.thumbnail-youtube').click(function() {
            $('.iframe-youtube').show();
            $('.iframe-youtube')[0].src += "?autoplay=1";
            $('.icon-youtube').hide();
        });




        if (data[0]['type'] != 'video') {
            $('.thumbnail-youtube').hide();
            locationImg[0]['w'] = '660';
            locationImg[0]['h'] = '470';

        }

        jQuery("#nanogallery2").nanogallery2({
            thumbnailBorderHorizontal: 0,
            thumbnailBorderVertical: 0,
            thumbnailHeight: 150,
            thumbnailWidth: 150,
            galleryDisplayMode: 'rows',
            galleryMaxRows: 1,
            items: data,
            galleryMosaic: locationImg,
        });
    });
    }

    //Show img
    showImgCombo(listImg);
</script>