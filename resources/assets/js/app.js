require('./bootstrap')

import 'slick-carousel'



const JDate = require('jalali-date')


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
    todayDate = todayDate.replace(/-/g, ',')
    const jTodaydate = new JDate(new Date(todayDate));
    $('#todayDate').html(jTodaydate.format('dddd DD MMMM YYYY'))


    try {
        var postedDate = $('.posted-date').html()
        postedDate = postedDate.replace(/-/g, ',')
        const jPosteddate = new JDate(new Date(postedDate));
        $('.posted-date').html(jPosteddate.format('dddd DD MMMM YYYY'))
    }catch (err){

    }
    try{
        var gDates = $('.jDate')
        for(var i=0;i<gDates.length;i++){
            var gDate=$(gDates[i]).html()
            gDate=gDate.replace(/-/g, ',')
            var jDate = new JDate(new Date(gDate));
            $(gDates[i]).html(jDate.format('YY/MM/DD'))
        }


    }catch (err){

    }


    window.onscroll = function () {
        var currentScrollPos = window.pageYOffset;
        if (currentScrollPos > navbarScrollPos) {
            $('#mainNavbar').addClass('fixed-top')
        }
        else {
            $('#mainNavbar').removeClass('fixed-top')
        }
    }


    $(window).scroll(function () {
        if ($(this).scrollTop() > 400) {
            $('.scrolltop:hidden').stop(true, true).fadeIn();
        } else {
            $('.scrolltop').stop(true, true).fadeOut();
        }
    });
    $(function () {
        $(".scroll").click(function () {
            $("html,body").animate({scrollTop: $(".thetop").offset().top}, "1000");
            return false
        })
    })
    $(function () {
        $("#contactUsBtn").click(function () {
            $("html,body").animate({scrollTop: $("#contactUs").offset().top}, "200");
            return false
        })
    })
    try {

    $("#charViewContainer").animate({scrollTop:$(".the-end").offset().top})
    }catch (err){

    }

    var pageUrl = window.location.href
    if(pageUrl.includes('user-courses')){
        try{
            $('#userCardNavCourse').addClass('active')
        }catch (err){

        }
    }else if(pageUrl.includes('user-profile')){
        try{
            $('#userCardNavProfile').addClass('active')
        }catch (err){

        }
    }else if(pageUrl.includes('user-tickets')){
        try{
            $('#userCardNavTickets').addClass('active')
        }catch (err){

        }
    }

    if(pageUrl.includes('professor-courses')){
        try{
            $('#professorCardNavCourse').addClass('active')
        }catch (err){

        }
    }else if(pageUrl.includes('professor-profile')){
        try{
            $('#professorCardNavProfile').addClass('active')
        }catch (err){

        }
    }else if(pageUrl.includes('professor-tickets')){
        try{
            $('#professorCardNavTickets').addClass('active')
        }catch (err){

        }
    }

    function checkImageLoad() {
        var profileImg=$('#profileImage')
        if($(profileImg).attr("src")=='#'){
            $('#profileImage').addClass('d-none')
            // $('#imgUploadBtnContainer').removeClass('d-none')

        }else{
            $('#imgTitle').css('color','rgba(0,0,0,0)')
            $('.fa-plus-circle').css('color','rgba(0,0,0,0)')

            // $('#imgUploadBtnContainer').addClass('d-none')
            $('#profileImage').removeClass('d-none')
        }
    }
    checkImageLoad()
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#profileImage').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
        $('#profileImage').removeClass('d-none')
        $('#imgTitle').css('color','rgba(0,0,0,0)')
        $('.fa-plus-circle').css('color','rgba(0,0,0,0)')

    }

    $("#inputProfileImg").change(function(){
        readURL(this)
    });
    $("#profileImg").change(function(){
        checkImageLoad()
    });

    function performClick(elemId) {
        console.log("sfsdfdf")
        var elem = document.getElementById(elemId);
        if(elem && document.createEvent) {
            var evt = document.createEvent("MouseEvents");
            evt.initEvent("click", true, false);
            elem.dispatchEvent(evt);
        }
    }


    window.checkForm=function()
    {
        //validation fails if the input is blank
        if($('#professorMassage').val() == "") {
            alert("خطا: متن پیام خالی است!");
            $('#professorMassage').focus();
            return false;
        }

        // regular expression to match only alphanumeric characters and spaces
        var re = /^[\w ]+$/;

        // validation fails if the input doesn't match our regular expression
        if(!re.test($('#professorMassage').val())) {
            alert("خطا: !");
            $('#professorMassage').focus();
            return false;
        }
        if(confirm("این پیام را ارسال کن")){
            return true
        }else{
            return false
        }

    }
    // $('.normal-example').persianDatepicker();


    function readSlideURL1(input) {

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#slideImg1').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
        // $('#slideImg1').removeClass('d-none')
        // $('#imgTitle').css('color','rgba(0,0,0,0)')
        // $('.fa-plus-circle').css('color','rgba(0,0,0,0)')
    }

    $("#inputSlideImg1").change(function(){
        readSlideURL1(this)
    });


    function readSlideURL2(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#slideImg2').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#inputSlideImg2").change(function(){
        readSlideURL2(this)
    });

    function readSlideURL3(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#slideImg3').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#inputSlideImg3").change(function(){
        readSlideURL3(this)
    });

    function readSlideURL4(input) {
        console.log("slideImg4")
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#slideImg4').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#inputSlideImg4").change(function(){
        readSlideURL4(this)
    });


})






