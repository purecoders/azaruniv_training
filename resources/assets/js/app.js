require('./bootstrap');

import 'slick-carousel';

const JDate = require('jalali-date');
$(document).ready(function () {
    var navbarScrollPos = $('#mainNavbar').offset().top;
    var currentScrollPos = window.pageYOffset;
    if (currentScrollPos > navbarScrollPos) {
        $('#mainNavbar').addClass('fixed-top')
    }
    else {
        $('#mainNavbar').removeClass('fixed-top')
    }
    $('.single-item').slick({
        // dots: true,
        autoplay: true,
        autoplaySpeed: 3000,
        prevArrow: false,
        nextArrow: false
        // speed: 800,
        // slidesToShow: 1,
        // adaptiveHeight: true

    });

    var carousel = new Swiper('#carousel', {
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        loop: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        onTransitionStart: function () {
            $(".swiper-slide div.title").hide();
        },
        onTransitionEnd: function (carousel) {

            $("#title_" + carousel.activeIndex).show("slow");
        }
    });
    var todayDate = $('#todayDate').html()
    var postedDate = $('.posted-date').html()
    todayDate = todayDate.replace(/-/g, ',')
    postedDate = postedDate.replace(/-/g, ',')
    const jTodaydate = new JDate(new Date(todayDate));
    const jPosteddate = new JDate(new Date(postedDate));
    $('#todayDate').html(jTodaydate.format('dddd DD MMMM YYYY'))
    $('.posted-date').html(jPosteddate.format('dddd DD MMMM YYYY'))

    window.onscroll = function () {
        var currentScrollPos = window.pageYOffset;
        console.log(navbarScrollPos,"  ",currentScrollPos)
        if (currentScrollPos > navbarScrollPos) {
            $('#mainNavbar').addClass('fixed-top')
        }
        else {
            $('#mainNavbar').removeClass('fixed-top')
        }
    }



    $(window).scroll(function() {
        if ($(this).scrollTop() > 400 ) {
            $('.scrolltop:hidden').stop(true, true).fadeIn();
        } else {
            $('.scrolltop').stop(true, true).fadeOut();
        }
    });
    $(function(){$(".scroll").click(function(){$("html,body").animate({scrollTop:$(".thetop").offset().top},"1000");return false})})
    $(function(){$("#contactUsBtn").click(function(){$("html,body").animate({scrollTop:$("#contactUs").offset().top},"1000");return false})})
})





