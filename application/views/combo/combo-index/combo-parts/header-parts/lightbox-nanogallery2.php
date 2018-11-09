<style>
    .nGY2GThumbnail:nth-child(4) .nGY2GThumbnailCustomLayer {
        background-color: #000;
        opacity: 0.5;
    }
    .nGY2GThumbnail:nth-child(4) .nGY2GThumbnailLabel{
        bottom: 35% !important;
    }
</style>

<div id="nanogallery2" style="max-width: 818px"></div>
<script>
    var listImg=[];
    function addImgToVar(_var ,imgs){
        $.each(imgs,function(key,item){
                    _var.push({
                        src : (item['type'] != 1) ? item['src'].replace('embed/','watch?v=') : item['full_src'],
                        srct: item['full_src'],
                        type: (item['type'] != 1) ? 'video' : 'img',
                        title: '',
                    });
                });
                _var[0]['srct']=imgs[0]['full_src']
    }
    //Load data form controller test using ajax
    $.ajax({
            url: 'loadimg',
            type: 'get',
            dataType: 'json',
            data: {},
            success: function(result) {
               addImgToVar(listImg,result);
            }
    });
    //End
    
    //Nanogalerry
    jQuery(document).ready(function() {

        jQuery("#nanogallery2").nanogallery2({
            thumbnailLabel: {
                "position": "overImageOnBottom",
                "hideIcons": true,
            },
            thumbnailBorderHorizontal: 0,
            thumbnailBorderVertical: 0,
            thumbnailHeight: 150,
            thumbnailWidth: 150,
            galleryDisplayMode : 'rows',
            galleryMaxRows : 1,
            items: listImg,
            galleryMosaic: [{
                c: 1,
                r: 1,
                w: 660,
                h: 470
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
            },],
        });
    });
</script>