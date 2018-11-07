<style>
    .mybtn-tab-combo {
        border: 0px;
        background-color: #f67521;
        width: 100%;
        color: #fff;
        margin-top: 10px;
        line-height: 30px;
    }
    
    .tab-mobile .collapse {
        padding-bottom: 30px;
    }
</style>
<div class="tab-mobile">
    <button class="mybtn-tab-combo" data-toggle="collapse" data-target="#id_content_total">Tổng quan</button>
    <div id="id_content_total" class="collapse">
        <?php $this->view('slideshow/combo/tong_quan.html');?>
        <?php $this->view('slideshow/combo/info_hotel-combo.html');?>
    </div>
    <button class="mybtn-tab-combo" data-toggle="collapse" data-target="#id_content_condition">Quy định dịch vụ</button>
    <div id="id_content_condition" class="collapse">
        <?php $this->view('slideshow/combo/condition.html');?>
    </div>
    <!--
    <button class="mybtn-tab-combo" data-toggle="collapse" data-target="#id_content_rate">Xem giá combo</button>
    <div id="id_content_rate" class="collapse">
        <?php $this->view('slideshow/combo/check_rate.html');?>
    </div>
    -->
    <button class="mybtn-tab-combo" data-toggle="collapse" data-target="#id_content_comment">Comment khách hàng</button>
    <div id="id_content_comment" class="collapse">
        <?php $this->view('slideshow/combo/review.html');?>
    </div>
</div>