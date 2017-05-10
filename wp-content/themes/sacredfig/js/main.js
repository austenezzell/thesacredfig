


$('.home #page').addClass('navOpen');


//after page is loaded animatate nav closed
Pace.on('done', function() {
    $('.loading').fadeOut(1000);
    $('#page').delay(750).queue(function() {
        $(this).removeClass('navOpen');
    });
    $('.imgOne').delay(1000).queue(function() {
        $(this).addClass('opacity');
    });
    $('.imgTwo').delay(1400).queue(function() {
        $(this).addClass('opacity');
    });
    $('.imgThree').delay(1800).queue(function() {
        $(this).addClass('opacity');
    });

    $('.title').delay(500).queue(function() {
        $(this).addClass('on');
    });
    $('.playButton').delay(700).queue(function() {
        $(this).addClass('outline').delay(300);
    });
    $('.videoCoverContent p').delay(2000).queue(function() {
        $(this).addClass('on').delay(300);
    });
    $('.videoHover').delay(2500).fadeOut(2000);

    $('.notification').delay(2000).queue(function() {
        $(this).addClass('slideDown');
    });
});

// SMOOTH SCROLLING

$('.scrollLocations, .singleSubnav a').click(function(e){
    e.preventDefault();
    $('html, body').animate({
        scrollTop: $( $.attr(this, 'href') ).offset().top
    }, 500);
});

$('.flex-control-nav li').click(function(e){
    e.preventDefault();
    $('html, body').animate({
        scrollTop: $( '#locationContainer' ).offset().top
    }, 500);
});


$('.downArrow').click(function(e){
    e.preventDefault();
    var clickedArrow = $(this);
    $('html, body').animate({
        scrollTop: clickedArrow.parent('.intro').next().offset().top
    }, 500);
});



// PARALAX OPACITY CHAGNE

$(function () {
  var window_width = $(window).width();

  var document_height = $(document).height() - $(window).height();

  if (window_width >= 700) {
    var fadeStart=50; // 100px scroll or less will equiv to 1 opacity
    var fadeUntil=document_height; // 200px scroll or more will equiv to 0 opacity
    var fading = $('#fading');

    $(window).bind('scroll', function(){
        var offset = $(document).scrollTop();
        var opacity=0;

        if( offset<=fadeStart ){
            opacity=1;
        }else if( offset<=fadeUntil ){
            opacity=1-offset/fadeUntil;
        }
        fading.css('opacity',opacity);
    });


  }
});


$(document).scrollsnap({
    snaps: '.snap',
    proximity: 200,
    offset: -0
});





$(window).scroll(function () {
    $(".animateImage ").css("background-position","50% " + (($(this).scrollTop() / 10)-140) + "px");
    //$(".postImage").css("background-position","50% " + (($(this).scrollTop() * 1.07)+140) + "px");
    $(".siteTitle").css("opacity", (1 - $(this).scrollTop()/100));

    // if($(window).width() >= 800){
    //     $(".singleAboutPhotos .imageOne").css("top", ( -$(this).scrollTop()/7)+130 + 'px');
    //     $(".singleAboutPhotos .imageTwo").css("top", ( $(this).scrollTop()/18)-40 + 'px');
    //     $(".singleAboutPhotos .imageThree").css("top", ( -$(this).scrollTop()/5)+180 + 'px');
    // }

    if($(window).width() >= 650) {
        $(".founderBG").css("background-position","100% " + (($(this).scrollTop() / 9)-280) + "px");
        $(".teachersBG").css("background-position","0% " + (($(this).scrollTop() / 9)-280) + "px");


        // $(".imgOne").css("top", ( $(this).scrollTop()/9) + 'px');
        // $(".imgTwo").css("top", ( -$(this).scrollTop()/8) + 'px');
        // $(".imgThree").css("top", ( -$(this).scrollTop()/5) + 'px');
        // $(".antonPhoto").css("top", ( $(this).scrollTop()/9)-200 + 'px');
        // $(".teachersPhoto").css("top", ( -$(this).scrollTop()/8)+200 + 'px');
    } else {
         // $(".antonPhoto").css("top", 0);
         // $(".teachersPhoto").css("top", 0);
    }
});

$('.closeNotification').click(function(e){
    e.preventDefault();
    $('.notification').addClass('slideUp');
    //$('.notification').removeClass('slideDown');

});

$('.navToggle').click(function(e){
    e.preventDefault();
    $('#page').toggleClass('navOpen');
});

$('.navOpenCover').click(function(){
    $('#page').removeClass('navOpen');
});


// FIT VID
$(".video").fitVids();


// WAYPOINTS

// QUICK BOOK
$('#about').waypoint(function(direction) {
    if (direction === 'down') {
        //$(this).addClass('fixed');
        $('.quickBook').show();
    } else {
        //$(this).removeClass('fixed');
        $('.quickBook').fadeOut();
    }
}, {offset:100});
$('#book').waypoint(function(direction) {
    if (direction === 'down') {
        //$(this).addClass('fixed');
        $('.quickBook').fadeOut();
    } else {
        //$(this).removeClass('fixed');
        $('.quickBook').show();
    }
}, {offset:'100%'});


$('.logo').waypoint(function(direction) {
    if (direction === 'down') {
        //$(this).addClass('fixed');
        $('.navToggle').addClass('black');
    } else {
        //$(this).removeClass('fixed');
        $('.navToggle').removeClass('black');
    }
}, {offset:0});

$('.locationContainer').waypoint(function(direction) {
    if (direction === 'down') {
        $('.flex-control-nav').addClass('fixed');
        $('.logo').addClass('opacity');
    } else {
        $('.flex-control-nav').removeClass('fixed');
        $('.logo').removeClass('opacity');
    }
}, {offset: 0});


// CURRENT SUBNAV POSTITION
$('#about').waypoint(function(direction) {
    if (direction === 'down') {
        $('.singleSubnav .navAbout').addClass('current');
    } else {
        $('.singleSubnav').removeClass('current');
    }
}, {offset:0});

$('#retreatcenter').waypoint(function(direction) {
    if (direction === 'down') {
        $('.singleSubnav a').removeClass('current');
        $('.singleSubnav .navcenter').addClass('current');
    } else {
        $('.singleSubnav a').removeClass('current');
        $('.singleSubnav .navAbout').addClass('current');
    }
}, {offset:0});

$('#curriculum').waypoint(function(direction) {
    if (direction === 'down') {
        $('.singleSubnav a').removeClass('current');
        $('.singleSubnav .navcurriculum').addClass('current');
    } else {
        $('.singleSubnav a').removeClass('current');
        $('.singleSubnav .navcenter').addClass('current');
    }
}, {offset:0});

$('#schedule').waypoint(function(direction) {
    if (direction === 'down') {
        $('.singleSubnav a').removeClass('current');
        $('.singleSubnav .navSchedule').addClass('current');
    } else {
        $('.singleSubnav a').removeClass('current');
        $('.singleSubnav .navcurriculum').addClass('current');
    }
}, {offset:0});

$('#faculty').waypoint(function(direction) {
    if (direction === 'down') {
        $('.singleSubnav a').removeClass('current');
        $('.singleSubnav .navFaculty').addClass('current');
    } else {
        $('.singleSubnav a').removeClass('current');
        $('.singleSubnav .navSchedule').addClass('current');
    }
}, {offset:0});

$('#testimonials').waypoint(function(direction) {
    if (direction === 'down') {
        $('.singleSubnav a').removeClass('current');
        $('.singleSubnav .navTestimonials').addClass('current');
    } else {
        $('.singleSubnav a').removeClass('current');
        $('.singleSubnav .navFaculty').addClass('current');
    }
}, {offset:0});

$('#prerequisite').waypoint(function(direction) {
    if (direction === 'down') {
        $('.singleSubnav a').removeClass('current');
        $('.singleSubnav .navprerequisite').addClass('current');
    } else {
        $('.singleSubnav a').removeClass('current');
        $('.singleSubnav .navTestimonials').addClass('current');
    }
}, {offset:0});

$('#investment').waypoint(function(direction) {
    if (direction === 'down') {
        $('.singleSubnav a').removeClass('current');
        $('.singleSubnav .navInvestment').addClass('current');
    } else {
        $('.singleSubnav a').removeClass('current');
        $('.singleSubnav .navprerequisite').addClass('current');
    }
}, {offset:0});

$('#book').waypoint(function(direction) {
    if (direction === 'down') {
        $('.singleSubnav a').removeClass('current');
        $('.singleSubnav .navBook').addClass('current');
    } else {
        $('.singleSubnav a').removeClass('current');
        $('.singleSubnav .navInvestment').addClass('current');
    }
}, {offset:0});



// PRODUCT HOVER
$('.product .module').hover(function(){
    $('.hpProducts').addClass('productHover');
    $(this).parent().addClass('hover');
}, function(){
    $('.hpProducts').removeClass('productHover');
    $(this).parent().removeClass('hover');
});

$('.product .module').click(function(){
    var productLink = $(this).find('a.product').attr('href');
    window.location.href = productLink;
});


// VERTICALLY CENTER OUR PHILOSOPHY TXT ON HP

$(window).resize(function() {
    var imgHeight = $('.philImg').height();
    var txtHeight = $('.philtxt').height();
    var currentWondowHeight = $(window).height();
    var windowWidth = $(window).width();
    var hpProductsHeight = $('.hpProducts .grid').height();

    var teacherThumb = $('.teacherThumbnail img').height();
    var aboutTeacher = $('.aboutTeacher').height();

    // MAIN CONTENT MIN HEIGHT
    $('.mainContent').css('min-height', currentWondowHeight);

    // STICKY SUB NAV

    $('.singleSubnav').waypoint(function(direction) {
        if (direction === 'down') {
            //$(this).addClass('fixed');
            $(this).addClass('fixed');
        } else {
            //$(this).removeClass('fixed');
            $(this).removeClass('fixed');
        }
    }, {offset:0});



    // SINGLE TEACHER TRAININGS PAGE
    if($(window).width() >= 700){
        if(teacherThumb > aboutTeacher) {
            $('.archiveContent .aboutTeacher').css('margin-top', (teacherThumb - aboutTeacher) /2);
        }
    } else {
        $('.archiveContent .aboutTeacher').css('margin-top', 0);
    }





    $('.mainImg, .header').css('height', currentWondowHeight - 220);

    $('.rsOverflow, .sliderContainer, .rsImg').height(currentWondowHeight);

    if($(window).height() >= hpProductsHeight){
        $('.hpProducts .grid').css('margin-top', (currentWondowHeight - hpProductsHeight) /2);
    }

    if($(window).width() >= 700){
        $('.philtxt').css('padding-top',(imgHeight - txtHeight)/2 );
        $('.hpProducts').css('min-height', currentWondowHeight);
    } else {
        $('.philtxt').css('padding-top', '0');
    }


    // SLIDER
    // var vidWidth = $('#bgvid').width();
    // var vidHeight = $('#bgvid').height();

    $('#photos').height(currentWondowHeight - 75);

    $('.locationContentContainer').css('padding-top', (currentWondowHeight - 275) / 2);

    $('.flexslider img').height(currentWondowHeight - 75);

    $('.flexslider .slideContainer').width(windowWidth);


    // CHECK HEIGHT OF PRODUCTS AGAINST WINDOW HEIGHT TO PREVENT UWANTED SNAPPING
    if(currentWondowHeight <= $('.hpProducts').height() +20 ){
        $('.hpProducts').removeClass('snap');
    } else {
        $('.hpProducts').addClass('snap');
    }

    positionVideoHeaderTitle();

    $('iframe[src*="embed.spotify.com"]').each( function() {
    $(this).css('width',$(this).parent(1).css('width'));
    $(this).attr('src',$(this).attr('src'));
  });


});

$(window).trigger('resize');



// FLEXISLIDER
$('.slide').hide();

$(window).load(function(){

    // VERTICALLY CENTER VIDEO
    var windowHeight = $(window).height();
    var vidHeight = $('#bgvid').height();
    var vertCenterVid = (vidHeight - (windowHeight - 210))/2;

    $('#bgvid').css('bottom',vertCenterVid);





});

// HOVER Z INDEX AND OPACITY CHANGE

$('.headerImages img').hover(function(){
    if ($(this).hasClass('top')){

    }
    else if ( $(this).hasClass('middle') ) {
        $('.top').removeClass('top').addClass('middle');
        $(this).removeClass('middle').addClass('top');
    }
    else if ( $(this).hasClass('bottom') ) {
        $('.middle').removeClass('middle').addClass('bottom');
        $('.top').removeClass('top').addClass('middle');
        $(this).removeClass('bottom').addClass('top');
    }
});

// TEACHER ARCHIVE SLIDEUP
$('.single .teacherExcrpt').addClass('visHidden');
$('.single .teacherExcrpt').waypoint(function() {
  $(this).toggleClass('slideup');
}, { offset: '95%' });

// SCHEDULE


$('.day').click(function(e){
    e.preventDefault();
    if( $(this).parent().hasClass('active') ) {
        $(this).parent().removeClass('active');
        $(this).siblings('.classes').children('.class').removeClass('current');
        $(this).siblings('.classDetail').hide();
    } else {
        $(this).parent().addClass('active');
        $(this).siblings('.classes').children('.class').addClass('current');
        $(this).siblings('.classDetail').fadeIn();
    }
});

$('.class').click(function(e){
    e.preventDefault();
    var selectedClass = $(this).index() + 1;
    // var selectedDetail = $(this).parent().siblings('.classDetail:nth-child(' + selectedClass + ')') ;

    if ( $(this).hasClass('current') ){
        $(this).removeClass('current');
        $(this).parent().siblings('.classDetail').eq(selectedClass - 1).hide();

        if ( $(this).siblings().hasClass('current') ){

        } else {
            $(this).closest('.dayContainer').removeClass('active');
        }
    } else {
        $(this).addClass('current');
        $(this).parent().siblings('.classDetail').eq(selectedClass - 1).show();
        $(this).closest('.dayContainer').addClass('active');
    }
});

$('.closeDetail').click(function(e){
    e.preventDefault();
    var xCloseDetail = $(this).parent().index() - 2;
    var xCurrentClass = $(this).parent().siblings('.classes').children('.class').eq(xCloseDetail);

    if ( xCurrentClass.hasClass('current') ){
        xCurrentClass.removeClass('current');
        if ( xCurrentClass.siblings().hasClass('current') ){

        } else {
            $(this).closest('.dayContainer').removeClass('active');
        }
    }
    $(this).parent().hide();
});

$('.openAll').click(function(e){
    e.preventDefault();
    $('.teacherSchedule').find('.class').addClass('current');
    $('.teacherSchedule').find('.classDetail').show();
    $('.class').closest('.dayContainer').addClass('active');

});
$('.closeAll').click(function(e){
    e.preventDefault();
    $('.teacherSchedule').find('.class').removeClass('current');
    $('.teacherSchedule').find('.classDetail').hide();
    $('.teacherSchedule').find('.dayContainer').removeClass('active');
});

// LEARN MORE LINK ACCORDION

$('.learnMore').click(function(e){
    e.preventDefault();
    var autoHeight = $(this).parent().next('.description').css('height', 'auto').height();

    if( $(this).hasClass('open') ) {
        $(this).removeClass('open').text('learn more');
        $(this).parent().next('.description').animate({
            height: 0,
            marginTop: 0
        }, 400).removeClass('open');
    } else {
        $(this).addClass('open').text('close');
        $(this).parent().next('.description').height(0).animate({
            height: autoHeight,
            marginTop: 30
        }, 400).addClass('open');
    }
});


// MORE TEACHER INFO ACCORDION
$('.single-teacher_trainings .aboutTeacher .more, .single-retreats .aboutTeacher .more').click(function(e){
    e.preventDefault();

    if( $(this).parent().hasClass('open') ){
        $(this).parent().find('.fullContent').slideUp();
        $(this).parent().find('.trimmedContent').fadeIn();
        $(this).parent().removeClass('open');
        $(this).text('more');
        $(this).closest('.teacherExcrpt').find('img').removeClass('twentyDeg');
    } else {
        $(this).parent().find('.trimmedContent').hide();
        $(this).parent().find('.fullContent').slideDown();
        $(this).parent().addClass('open');
        $(this).text('close');
        $(this).closest('.teacherExcrpt').find('img').addClass('twentyDeg');
    }


});


$('.whatYouGet li').not(':last').append('<span class="icon-close"></span>');

$('.whatYouGet li, .prices, .curriculumpod').addClass('visHidden');


$('.prices').waypoint(function(direction) {
    if (direction === 'down') {
        $(this).addClass('slideup');
    } else {
         $(this).removeClass('slideup');
    }
}, { offset: '80%' });

$('.whatYouGet li').waypoint(function(direction) {
    if (direction === 'down') {
        $(this).addClass('slideup');
    } else {
         $(this).removeClass('slideup');
    }
}, { offset: '80%' });

$('.curriculumpod').waypoint(function(direction) {
    if (direction === 'down') {
        //$(this).addClass('fixed');
        $(this).addClass('opacity');
    } else {
        //$(this).removeClass('fixed');
        $(this).removeClass('opacity');
    }
}, { offset: '80%' });


$('.bookNow a').hover(function(){
    $(this).removeClass('bookButton');
}, function(){
    $(this).addClass('bookButton');
});


$('.videoCover').hover(function(){
    $('.videoHover').fadeIn(600);
    $('.playButton').addClass('active');
}, function(){
    $('.videoHover').stop().fadeOut(600);
    $('.playButton').removeClass('active');
});
$('.videoCover').stop().click(function(){
    $(this).fadeOut(500);

});






function positionVideoHeaderTitle(){
    videoHeight = $('.headerVideo').height();
    videoHeaderHeight = $('.videoHeader').height();

    $('.videoHeader .siteTitle').css('top', (videoHeaderHeight - videoHeight) / 2 );
}
positionVideoHeaderTitle();



function blogArticleHightlight(){
    $('.blog-content .post').hover(function(){
        $(this).addClass('active');
        $(this).closest('.site-content').addClass('active')
    }, function(){
        $(this).removeClass('active');
        $(this).closest('.site-content').removeClass('active')
    });
    $('.blog-content .post').click(function(){
        var articleLink = $(this).find('a.button').attr('href');
        window.location.href = articleLink;
    });
}

blogArticleHightlight();

function classHighlight(){
    $('.productLink').hover(function(){
        $(this).addClass('active');
        $(this).closest('.archiveTeacherTraining').addClass('active')
    }, function(){
        $(this).removeClass('active');
        $(this).closest('.archiveTeacherTraining').removeClass('active')
    });
}

classHighlight();

$('.post-type-archive-teacher_trainings .videoCover').click(function() {
    $.cookie('videoArchive', '1', { expires: 1 });
    event.target.playVideo();
});

// VIDEO WAS WATCHED ON ARCHIVE PAGE

var videoArchive = $.cookie('videoArchive');

if (videoArchive && videoArchive.length) {
    $('.single-teacher_trainings .videoContainer').hide();
}


function vertCenter(object){
    var objectHeight = $('.' + object).height();
    $('.' + object).css('height', objectHeight);
}






// global variable for the player
var player;

// this function gets called when API is ready to use
function onYouTubePlayerAPIReady() {
  // create the global player from the specific iframe (#video)
  player = new YT.Player('video', {
    events: {
      // call this function when player is ready to use
      'onReady': onPlayerReady
    }
  });
}

function onPlayerReady(event) {

  // bind events
  var playButton = document.getElementById("playVideoButton");
  playButton.addEventListener("click", function() {
    player.playVideo();
  });

  var pauseButton = document.getElementById("pause-button");
  pauseButton.addEventListener("click", function() {
    player.pauseVideo();
  });

}

// Inject YouTube API script
var tag = document.createElement('script');
tag.src = "//www.youtube.com/player_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);



$('.belief').addClass('visHidden');

// ABOUT PAGE

$('.beliefs').waypoint(function(direction) {
    if (direction === 'down') {
        $('.belief').addClass('slideup');
    } else {
        $('.belief').removeClass('slideup');
    }
}, { offset: '95%' });


$('iframe[src*="embed.spotify.com"]').each( function() {
    $(this).css('width',$(this).parent(1).css('width'));
    $(this).attr('src',$(this).attr('src'));
});




$('.listenLink').hover(function(){
    $('.article .category-listen').addClass('active');
    $('#content').addClass('active');
}, function(){
    $('.article .category-listen').removeClass('active');
    $('#content').removeClass('active');
})
$('.readLink').hover(function(){
    $('.article .category-read').addClass('active');
    $('#content').addClass('active');
}, function(){
    $('.article .category-read').removeClass('active');
    $('#content').removeClass('active');
})
$('.watchLink').hover(function(){
    $('.article .category-watch').addClass('active');
    $('#content').addClass('active');
}, function(){
    $('.article .category-watch').removeClass('active');
    $('#content').removeClass('active');
})



// FORM PAGINATION PROGRESS
var currentPage = $('.gf_step_active').text();
var totalPages = $('.gf_step').length;

$('.formDescription').after("<p class='pageProgress'>You're on page " + currentPage + "of&nbsp;" + totalPages+":");
$('.gf_page_steps').hide();

if(currentPage != 1){
    $('.formDescription').hide();
}
if (totalPages == 0){
    $('.pageProgress').hide();
}















