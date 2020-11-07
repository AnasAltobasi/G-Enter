$(function(){

    ////////////////// Start Type Write Effects //////////////
    var Text1 = $('.Typer').data('text') ,

    textlen = Text1.length ,

    n = 0 ,

    Thetyper = setInterval(function(){

        $('.Typer').each(function(){

        $(this).html($(this).html() + Text1[n]);
        });

        n +=1 ;

        if (n >= textlen) {
        clearInterval(Thetyper);
        }

    },100);
    /////////////////// End Type Write Effects //////////////

    var maxHeight = 0 ;

    $('.same-height div').each(function(){
        if($(this).height() > maxHeight) {
            maxHeight = $(this).height() ;
        }

    });
    $('.same-height div').height(maxHeight);


    $('.magnific-gallery').each(function(index , value){
        var gallery = $(this);
        var galleryImages = $(this).data('links').split(',');
        var items = [];
        for(var i=0;i<galleryImages.length; i++){
            items.push({
            src:galleryImages[i],
            title:''
            });
        }
        gallery.magnificPopup({
            mainClass: 'mfp-fade',
            items:items,
            gallery:{
            enabled:true,
            tPrev: $(this).data('prev-text'),
            tNext: $(this).data('next-text')
            },
            type: 'image'
        });
    });

    //Animated progrees

    $('.animate-progrees span').each(function(){

        $(this).animate({
            width : $(this).attr('data-progrees') + '%'

        }, 1000 , function() {
            //Call Back Function After Animated

            $(this).text($(this).attr('data-progrees') + '%');

        });

    });

    $('.counter').counterUp({
        delay: 10,
        time: 1000
    });


});
(function ($) {
    "use strict";

    
    /*==================================================================
    [ Validate ]*/
    var name = $('.validate-input input[name="name"]');
    var email = $('.validate-input input[name="email"]');
    var subject = $('.validate-input input[name="subject"]');
    var message = $('.validate-input textarea[name="message"]');


    $('.validate-form').on('submit',function(){
        var check = true;

        if($(name).val().trim() == ''){
            showValidate(name);
            check=false;
        }

        if($(subject).val().trim() == ''){
            showValidate(subject);
            check=false;
        }


        if($(email).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
            showValidate(email);
            check=false;
        }

        if($(message).val().trim() == ''){
            showValidate(message);
            check=false;
        }

        return check;
    });


    $('.validate-form .input1').each(function(){
        $(this).focus(function(){
           hideValidate(this);
       });
    });

    function showValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).addClass('alert-validate');
    }

    function hideValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).removeClass('alert-validate');
    }
    
    

})(jQuery);


 
