/**
 * Created with JetBrains PhpStorm.
 * User: P2DC
 * Date: 4/12/2556
 * Time: 15:12 น.
 * To change this template use File | Settings | File Templates.
 */

var main = (function(){
    return {
        loaderWrap: null,
        activeContent: null,
        outContent: null,
        action: function(page){
            main.outContent = $(".main-content", main.loaderWrap);
            main.outContent.bind("webkitTransitionEnd transitionend msTransitionEnd oTransitionEnd mozTransitionEnd", function(e){
                main.outContent.unbind("webkitTransitionEnd");
                $(this).remove();
                main.loaderWrap.append(main.activeContent);
                setTimeout(function(){ main.activeContent.addClass("in"); },1);
            });
            main.outContent.addClass("load-out");
            main.activeContent = $('<div class="main-content fade"></div>');
            main.activeContent.load("page/"+page+".php", function(){
                //main.loaderWrap.append(main.activeContent);
            });
        },
        bindTransitionEnd: function(el, callback){
            el.bind("webkitTransitionEnd transitionend msTransitionEnd oTransitionEnd mozTransitionEnd", callback);
        }
    };
}());
$(function(){
    main.loaderWrap = $("#loader-wrap");
    main.aciveContent = $(".main-content:first", main.loaderWrap);
});