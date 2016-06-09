//$("#video-container").hide();

$("#content").ready(function(){
    
    //mute button
    if($(window).width()<993)
    {
       
    }


    function main_content_reveal()
    {
        window.sr = ScrollReveal({ duration: 1000 }).reveal('#main-content');
    }


    $('.event-NLC').hide();
	$('.event-NPC').hide();
    $("#story").hide();
    $("#unmute").hide();
    $("#mute").click(function(){
        $("#audio").prop('muted', true);
        $("#mute").hide();
        $("#unmute").show();
    });
    $("#unmute").click(function(){
        $("#audio").prop('muted', false);
        $("#unmute").hide();
        $("#mute").show();
    });
    
    //skip button
    $("#skip").click(function(){
        $("#video").parent().fadeOut();
        $(this).fadeOut();
        main_content_reveal();
    });
    
    //entrance fadeout
    $('#video').bind('ended', function(){
        $(this).parent().fadeOut();
        $("#skip").fadeOut();
        main_content_reveal();
    });
    
    //footer event
    $("#footer-info").hide();
    $("#dim").hide();
    var footerFlag = 0;
    $('#footer-toggle').hover(function(){
        if (footerFlag == 0) {
            $("#footer-info").slideToggle("medium");
            $("#dim").fadeIn("medium");
            footerFlag = 1;
        }
    });
    
    $('#dim').hover(function(){
        if (footerFlag == 1) {
            $("#footer-info").slideToggle("medium");
            $("#dim").fadeOut("medium");
            footerFlag = 0;
        }
    });

    $('.scroll').on('click', function(event) {

        var target = $( $(this).attr('href') );
        event.preventDefault();
        var parent = $(this).attr('parent');
        var dest = $(this).attr('href');
        $(parent).fadeOut(500);
        $(dest).fadeIn(1000);
        
    });

    $('.mascot').hover(function()
    {
       var maskot = $(this).attr('id');
       maskot = maskot.replace('mascot','');
       $('#story-title').text(maskot);
    },
        function()
        {
            $('#story-title').text('We are Schematics');
        }
    )

    $(document).on('click','.mascot',function(e)
    {
        e.preventDefault();
        var dest = $(this).attr('id');
        dest = dest.replace('mascot','');

         if(dest=="NST"||dest=="REEVA"||dest=="NLC"||dest=="NPC")
         {

            $('#story').fadeOut(500);
            $('.event-'+dest).fadeIn(1000);
            //window.sr = ScrollReveal({ duration: 1000 }).reveal('.container-event');
         }

    })

    $(document).on('click','.close-event',function(e)
    {
        var parent = $(this).attr('parent');
        e.preventDefault();
        $(parent).fadeOut(500);
        $('#story').fadeIn(1000);
    })

    


    
});


$(document).ready(function($){
          var parPosition = [];
        $('.par').each(function() {
            parPosition.push($(this).offset().top);
        });
        
        $('.link').click(function(e){
            e.preventDefault();
            $('html, body').animate({
                scrollTop: $( $.attr(this, 'href') ).offset().top
            }, 500);
            return false;
        });
        
            $('.link').click(function () {
            $('.link').removeClass('active');
                $(this).addClass('active');
        }); 
        
       $('.link').hover(function() {
           $(this).find('.label').show();
           }, function() {
           $(this).find('.label').hide();
       });
        
           $(document).scroll(function(){
        var position = $(document).scrollTop(),
                index; 
                for (var i=0; i<parPosition.length; i++) {
                if (position <= parPosition[i]) {
                    index = i;
                    break;
                }
            }
      $('.link').removeClass('active');
            $('.link:eq('+index+')').addClass('active');
        });
        
            $('.link').click(function () {
            $('.link').removeClass('active');
                $(this).addClass('active');
        });   
    });


document.addEventListener('DOMContentLoaded', function () {
  particleground(document.getElementById('main'), {
    dotColor: 'rgba(0,0,0,0.08)',
    lineColor: 'rgba(0,0,0,0.08)'
  });
}, false);
