<?php
/**
 * Created by JetBrains PhpStorm.
 * User: P2DC
 * Date: 4/12/2556
 * Time: 11:26 น.
 * To change this template use File | Settings | File Templates.
 */
?>
<!DOCTYPE>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="//code.jquery.com/jquery-1.10.1.min.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>

    <!-- site style -->
    <link rel="stylesheet" href="css/main-style.css">
    <link rel="stylesheet" href="css/block-style.css">

    <!-- wmuslider -->
    <link rel="stylesheet" href="css/wmuslide.css">
    <script type="text/javascript" src="js/jquery.wmuSlider.min.js"></script>
    <script type="text/javascript" src="js/jquery.touchSwipe.min.js"></script>
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=true&language=th"></script>

    <script type="text/javascript" src="js/main.js"></script>
</head>
<body>
<div class="header">
    <div class="mobile-header">
        <a class="nav-button nav-home pull-left" href="#home" data-bc="Pla2 Fusion" style="color: black; border: none;">
            <img src="images/p2logo.svg" style="width: 64px; margin-top: 4px;">
        </a>
        <div class="mobile-nav" style="margin-left: 100px;">
            <span class="bc" style="line-height: 44px;
padding-left: 10px;
font-size: 14px;
text-shadow: 0 1px white;
color: #666666;">
            </span>
            <a class="pull-right glyphicon glyphicon-list toggle-mobile-menu" style="font-size: 28px; margin-right: 10px; cursor: pointer; line-height: 40px; text-decoration: none;"></a>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
        <div class="menu-list" style="display: none; margin-left: 100px;">
            <a class="nav-button" menu1="#home" href="#home" data-bc="Pla2 Fusion">Pla2 Fusion</a>
            <a class="nav-button" menu1="#product" href="#product/feature">Product</a>
            <!--<a class="nav-button" menu1="#service" href="#service">Service</a>-->
            <a class="nav-button" menu1="#about" href="#about">About Us</a>
            <a class="nav-button" menu1="#contact" href="#contact">Contact Us</a>
        </div>
    </div>
    <div class="desktop-header" style="padding: 0 20px; width: 640px; margin: 0 auto;">
        <div style="width: 97px; float: left;">
            <a class="nav-button" href="#home">
                <img src="images/p2logo.svg" class="main-logo pull-left" style="width: 64px; margin-top: 33px;">
            </a>
        </div>
        <nav class="main-nav pull-left" style="border-radius: 4px;">
            <a class="nav-button nav-home" menu1="#home" href="#home" data-bc="Pla2 Fusion" style="">Pla2Fusion</a>
            <a class="nav-button" menu1="#product" href="#product/feature">Product</a>
            <!--<a class="nav-button" menu1="#service" href="#service">Service</a>-->
            <a class="nav-button" menu1="#about" href="#about">About Us</a>
            <a class="nav-button" menu1="#contact" href="#contact">Contact Us</a>
            <div class="clearfix"></div>
        </nav>
        <div class="clearfix"></div>
    </div>
    <div class="wrap-1">
        <div class="lv2-nav" style="display: none;">
            <nav rel="product">
                <a class="nav-button" href="#product/feature">Feature</a>
                <a class="nav-button" href="#product/function">Function</a>
                <!--<a class="nav-button" href="#product/price">Price</a>-->
                <a class="nav-button button button-order" href="#product/order" style="margin-left: 5px;">Order Now</a>
            </nav>
            <nav rel="service">
                <a class="nav-button" href="#service/app">Mobile Application</a>
                <a class="nav-button" href="#service/datacenter">Data Center</a>
                <a class="nav-button" href="#service/production">Production</a>
            </nav>
            <nav rel="service"></nav>
        </div>
    </div>
</div>
<section class="page-body">
    <div id="loader-wrap">
        <div class="main-content"></div>
    </div>
</section>
<script type="text/javascript" src="js/jquery.wmuSlider.min.js"></script>
<!--
<script type="text/javascript" src="js/jquery.wmuslider-min.js"></script>
-->
<script type="text/javascript">
var action = {};
$(function(e){
    var lv2Section = $('.lv2-nav');
    var mobileHeader = $('.mobile-header');

    action = {
        call: function(page) {
            var page = page.replace("#", "")
            var section = page.split("/");
            main.action(page);
            if(section.length > 1){
                lv2Section.find('nav').hide();
                lv2Section.find('nav[rel="'+section[0]+'"]').show();
                lv2Section.slideDown();

                $('.nav-button').removeClass("active");
                $('.nav-button[menu1="#'+section[0]+'"]').addClass("active");
                $('.nav-button[href="#'+page+'"]').addClass("active");
            }
            else {
                lv2Section.slideUp();
                $('.nav-button').removeClass("active");
                $('.nav-button[href="#'+page+'"]').addClass("active");
            }
            var text = "";
            if(page=="home"){
                text = "Pla2 Fusion";
            }else {
                text = $('.nav-button[menu1="#'+section[0]+'"]', mobileHeader).text();
            }
            $('.bc', mobileHeader).text(text);
        },
        refreshHilight: function(){
            var page = window.location.hash.replace("#", "");
            var section = page.split("/");
            if(section.length > 1){
                lv2Section.find('nav').hide();
                lv2Section.find('nav[rel="'+section[0]+'"]').show();
                lv2Section.slideDown();

                $('.nav-button').removeClass("active");
                $('.nav-button[menu1="#'+section[0]+'"]').addClass("active");
                $('.nav-button[href="#'+page+'"]').addClass("active");
            }
            else {
                lv2Section.slideUp();
                $('.nav-button').removeClass("active");
                $('.nav-button[href="#'+page+'"]').addClass("active");
            }
        }
    };
    (function(){
        //var lv2 = $(".lv2-nav");
        /*
        $(".nav-button").click(function(e){
            var page = $(this).attr("href");
            page = page.replace("#", "");
            action.call(page);
        });
        */
        window.onhashchange = function(){
            var page = window.location.hash;
            page = page.replace("#", "");
            action.call(page);
        };
    }());
    (function(){
        var hash = window.location.hash;
        if(typeof window.location.hash == "undefined" || window.location.hash==""){
            window.location.hash="#product/feature";
        }
        action.call(window.location.hash);
    }());
    (function(){
        var active = false;

        function showMenu(){
            $('.menu-list', mobileHeader).slideDown();
            active = true;
        };
        function hideMenu(){
            $('.menu-list', mobileHeader).slideUp();
            active = false;
        };
        $('.toggle-mobile-menu').click(function(){
            if(active) {
                hideMenu();
            }
            else {
                showMenu();
            }
        });

        $(".nav-button", mobileHeader).click(function(e){
            hideMenu();
        });

        $(".nav-parent-button").click(function(e){
            e.preventDefault();
        });

        $('.nav-parent-button').click(function(e){
            if($(this).hasClass("open")){
                $(".lv2-nav", this).slideUp();
                $(".icon-status", this).removeClass("glyphicon-chevron-down").addClass("glyphicon-chevron-right");
                $(this).removeClass("open");
            }
            else {
                $(".lv2-nav", this).slideDown();
                $(".icon-status", this).removeClass("glyphicon-chevron-right").addClass("glyphicon-chevron-down");
                $(this).addClass("open");
            }
        });
    }());
});
</script>
</body>
</html>