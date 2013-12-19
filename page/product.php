<?php
/**
 * Created by JetBrains PhpStorm.
 * User: P2DC
 * Date: 4/12/2556
 * Time: 15:07 น.
 * To change this template use File | Settings | File Templates.
 */
?>
<div class="product-block">
    <div class="content fade in">
        <?php include("product/feature.php");?>
    </div>
</div>
<script type="text/javascript">
$(function(){
    var block = $(".product-block");
    var old = $(".content", block);
    function getNewContent(page){
        var content = $('<div class="content fade"></div>');
        content.load(page);
        return content;
    }
    $('.lv2-nav-button').click(function(e){
        var href = $(this).attr("href");
        var page = 'page/'+href.replace("#", "")+'.php';
        var content = getNewContent(page);
        main.bindTransitionEnd(old, function(){
            block.append(content);
            old.remove();
            old = content;
            setTimeout(function(){ content.addClass("in"); },1);
        })
        old.removeClass("in");
    });
});
</script>