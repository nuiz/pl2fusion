<?php
/**
 * Created by JetBrains PhpStorm.
 * User: P2DC
 * Date: 4/12/2556
 * Time: 15:07 น.
 * To change this template use File | Settings | File Templates.
 */
?>
<div class="display-contact" style="margin-top:-40px;">
    <div class="section section-1">
        <div class="container">
            <div class="horz-block left-block image">
                <div id="map" style="height: 300px; width: 100%;"></div>
            </div>
            <div class="horz-block right-block text ct-pg" style="text-align: left; font-weight: bold;">
                <p>
                    บริษัท ปลาทูฟิวชั่น จำกัด
                </p>
                <p>
                    ที่อยู่ : 39 ถ.ห้วยแก้ว ต.สุเทพ อ.เมืองเชียงใหม่ จ.เชียงใหม่ 50200
                </p>
                <p>
                    เบอ์โทร : 087-787-6960
                </p>
                <p>
                    E-mail : pla2fusion@gmail.com
                </p>
            </div>
        </div>
    </div>
</div>
<style type="text/css">
.ct-pg p {
    margin-bottom: 20px;
}
@media (max-width: 639px){
    .ct-pg {
        margin-top: 40px;
    }
}
</style>
<script type="text/javascript">
$(function(){
    //$.getScript("", function(){
        var latLng = new google.maps.LatLng(18.797705, 98.973392);
        var myOptions = {
            'center': latLng,
            'zoom': 16,
            'mapTypeId': google.maps.MapTypeId.ROADMAP,
            //'scrollwheel': false,
            'disableDefaultUI': true,
        };
        var map = new google.maps.Map(window.document.getElementById("map"), myOptions);
        var marker = new google.maps.Marker({
            'position': latLng,
            'map': map
        });
    //});
});
</script>