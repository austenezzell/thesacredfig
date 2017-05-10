

// PARALAX OPACITY CHAGNE

$(function () {
  var window_width = $(window).width();
  var document_height = $(document).height() - $(window).height();

  if (window_width >= 700) {
    
    var fadeStart=50 // 100px scroll or less will equiv to 1 opacity
    ,fadeUntil=document_height // 200px scroll or more will equiv to 0 opacity
    ,fading = $('#fading');

    $(window).bind('scroll', function(){
        var offset = $(document).scrollTop()
            ,opacity=0
        ;
        if( offset<=fadeStart ){
            opacity=1;
        }else if( offset<=fadeUntil ){
            opacity=1-offset/fadeUntil;
        }
        fading.css('opacity',opacity);
    });


  }
});




jQuery(document).bind('gform_confirmation_loaded', function(event, form_id){
    $('.logo').removeClass('white');
    $('#page').removeClass('colorChange');
    
    $('#page').addClass('confirmation');
});
