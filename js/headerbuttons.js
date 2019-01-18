jQuery(document).ready(function($) {
    var $analysisConsulting = $('.analysis-consulting-home-section');
    var $onSiteServices = $('.on-site-services-home-section');
    var $products = $('.products-home-section');
    var $training = $('.training-home-section');

    $('#block-block-8 ul.nav-tabs li.tabs-left').click(function(){
        var tab_id = $(this).attr('data-tab');


        $('#block-block-8 ul.nav-tabs li.tabs-left').removeClass('current');
        $(this).addClass('current');

        $('#block-block-9 .tab-content').removeClass('current');
        $('#block-block-9 .home-tab-image').removeClass('current');

        $("#tab-"+tab_id).addClass('current');
        $("#img-"+tab_id).addClass('current');

        // var bgColor = $('li#tab2.current').css('background-color');

        if (tab_id != 1) {
            $('#block-views-slick-carousel-block').css('display', 'none');
        } else {
            $('#block-views-slick-carousel-block').css('display', 'inherit');
        }

    });

});
