wow = new WOW({
    mobile: false
});
wow.init();

var viewport_width = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
var viewport_height = Math.max(document.documentElement.clientHeight, window.innerHeight || 0);
var PPOFixed = {
    mainMenu:function(){
        /*jQuery('.main-menu').scrollToFixed( {
            marginTop: jQuery('#wpadminbar').outerHeight(true),
            limit: jQuery('.fanfacebook').offset().top
        });*/
        var msie6 = jQuery.browser == 'msie' && jQuery.browser.version < 7;
        if (!msie6) {
            var top = jQuery('.top-navigation').offset().top - parseFloat(jQuery('.top-navigation').css('margin-top').replace(/auto/, 0));
            jQuery(window).scroll(function(event){
                if (jQuery(this).scrollTop() >= top){
                    var wpadminbar_height = 0;
                    if(jQuery(this).width() > 583){
                        wpadminbar_height = jQuery('#wpadminbar').outerHeight(true);
                    }
                    jQuery('.top-navigation').css({
                        'position':'fixed',
                        'top':wpadminbar_height + 0,
                        'z-index':1000
                    });
                } else {
                    jQuery('.top-navigation').css({
                        'position':'relative',
                        'top':0,
                        'z-index':1000
                    });
                }
            });
        }
    },
    columns:function(col){
        var nav_height = jQuery('#wpadminbar').outerHeight(true) + jQuery(".top-navigation").outerHeight(true);
        var summaries = jQuery(col);
        summaries.each(function(i) {
            var summary = jQuery(summaries[i]);
            var next = summaries[i + 1];

            summary.scrollToFixed({
                marginTop: nav_height,
                limit: function() {
                    var limit = 0;
                    if (next) {
                        limit = jQuery(next).offset().top - jQuery(this).outerHeight(true) - 10;
                    }else{
                        limit = jQuery('#footer').offset().top - jQuery(this).outerHeight(true) - 10;
                    }
                    return limit;
                },
                zIndex: 999
            });
        });
    },
    sidebar:function(){
        if(jQuery("#sidebar section.widget").length > 0){
            if(is_fixed_menu){
                jQuery("#sidebar section.widget").eq(jQuery("#sidebar section.widget").length - 1).scrollToFixed( {
                    marginTop: jQuery('#wpadminbar').outerHeight(true) + jQuery(".top-navigation").outerHeight(true),
                    limit: jQuery('#footer').offset().top
                });
            } else {
                jQuery("#sidebar section.widget").eq(jQuery("#sidebar section.widget").length - 1).scrollToFixed( {
                    marginTop: jQuery('#wpadminbar').outerHeight(true),
                    limit: jQuery('#footer').offset().top
                });
            }
        }
    }
};

jQuery(document).ready(function ($) {
    PPOFixed.sidebar();
    if(is_fixed_menu){
        PPOFixed.mainMenu();
    }
    
    jQuery(window).bind('load resize', function (){
        viewport_width = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
        viewport_height = Math.max(document.documentElement.clientHeight, window.innerHeight || 0);
        
        jQuery('.bxslider').show().bxSlider({
            auto: true,
            pager: false,
            controls: false,
            pause: 10000
        });
    });

    jQuery("#footer .wpcf7-form-control.wpcf7-submit").addClass('btn btn-warning');
    
    // Back to top
    jQuery("#back-top").click(function (){
        jQuery("html, body").animate({ scrollTop: 0 }, "slow");
    });

    // Menu mobile
    jQuery('button.left-menu').click(function (){
        var effect = jQuery(this).attr('data-effect');
        if(jQuery(this).parent().parent().hasClass('mobile-clicked')){
            jQuery('.st-menu').animate({
                width: 0
            }).css({
                display: 'none',
                transform: 'translate(0px, 0px)',
                transition: 'transform 400ms ease 0s'
            });
            jQuery(this).parent().parent().addClass('mobile-unclicked').removeClass('mobile-clicked').css({
                transform: 'translate(0px, 0px)',
                transition: 'transform 400ms ease 0s'
            });
            jQuery(this).parent().parent().parent().removeClass('st-menu-open ' + effect);
            jQuery("#ppo-overlay").hide();
        } else {
            jQuery(this).parent().parent().parent().addClass('st-menu-open ' + effect);
            jQuery('.st-menu').animate({
                width: 270
            }).css({
                display: 'block',
                transform: 'translate(270px, 0px)',
                transition: 'transform 400ms ease 0s'
            });
            jQuery(this).parent().parent().addClass('mobile-clicked').removeClass('mobile-unclicked').css({
                transform: 'translate(270px, 0px)',
                transition: 'transform 400ms ease 0s'
            });
            jQuery("#ppo-overlay").show();
        }
    });
    jQuery("#ppo-overlay").click(function (){
        if (jQuery(".st-container").find('.mobile-header').hasClass('mobile-clicked')) {
            jQuery('button.left-menu').trigger('click');
        }
    });
    if ("ontouchstart" in document.documentElement) {
        var element = document.querySelector('#ppo-overlay');
        var element2 = document.querySelector('.st-menu');
        var hammertime = Hammer(element).on("swipeleft", function (event) {
            jQuery("#ppo-overlay").trigger('click');
        });
        var hammertime2 = Hammer(element2).on("swipeleft", function (event) {
            jQuery("#ppo-overlay").trigger('click');
        });
    }
    jQuery(window).bind('resize', function(){
        jQuery("#ppo-overlay").trigger('click');
    });
    jQuery("#search").focusin(function (){
        jQuery(this).prev().hide();
    });
    jQuery("#search").focusout(function (){
        jQuery(this).prev().show();
    });
    jQuery(".right-menu").click(function (){
        if(fan_page_url.length > 0){
            window.open(fan_page_url,'_blank');
        }
    });
    
    var cbHeight = jQuery(window).height() - jQuery("#wpadminbar").outerHeight(true);
    jQuery('.fancybox').colorbox({
        fixed: true,
        height: cbHeight
    });
});