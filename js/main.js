
$(document).ready(function(){
          $('.bxslider').bxSlider({
              adaptiveHeight: true
          });
});

$(document).ready(function(){
            var img_alto = $('.img-trabajo').height();
            if(img_alto >= 600){
                $('.img-trabajo').css("cursor","ns-resize");
            };
});
   
$( document ).ready(function() {
            $("#grafico1").circliful({
                animation: 1,
                animationStep: 6,
                foregroundBorderWidth: 12,
                backgroundBorderWidth: 3,
                foregroundColor: '#12D4BC',
                backgroundColor: '#aaa',
                percent: 80,
                iconColor: '#12D4BC',
                icon: 'f121',
                iconSize: '40',
                iconPosition: 'middle'
            });
            $("#grafico2").circliful({
                animation: 1,
                animationStep: 6,
                foregroundBorderWidth: 12,
                backgroundBorderWidth: 3,
                foregroundColor: '#12D4BC',
                backgroundColor: '#aaa',
                percent: 70,
                iconColor: '#12D4BC',
                icon: 'f121',
                iconSize: '40',
                iconPosition: 'middle'
            });
            $("#grafico3").circliful({
                animation: 1,
                animationStep: 6,
                foregroundBorderWidth: 12,
                backgroundBorderWidth: 3,
                foregroundColor: '#12D4BC',
                backgroundColor: '#aaa',
                percent: 50,
                iconColor: '#12D4BC',
                icon: 'f121',
                iconSize: '40',
                iconPosition: 'middle'
            });
            $("#grafico4").circliful({
                animation: 1,
                animationStep: 6,
                foregroundBorderWidth: 12,
                backgroundBorderWidth: 3,
                foregroundColor: '#12D4BC',
                backgroundColor: '#aaa',
                percent: 20,
                iconColor: '#12D4BC',
                icon: 'f121',
                iconSize: '40',
                iconPosition: 'middle'
            });
            $("#grafico5").circliful({
                animation: 1,
                animationStep: 6,
                foregroundBorderWidth: 12,
                backgroundBorderWidth: 3,
                foregroundColor: '#12D4BC',
                backgroundColor: '#aaa',
                percent: 70,
                iconColor: '#12D4BC',
                icon: 'f121',
                iconSize: '40',
                iconPosition: 'middle'
            });
            $("#grafico6").circliful({
                animation: 1,
                animationStep: 6,
                foregroundBorderWidth: 12,
                backgroundBorderWidth: 3,
                foregroundColor: '#12D4BC',
                backgroundColor: '#aaa',
                percent: 40,
                iconColor: '#12D4BC',
                icon: 'f121',
                iconSize: '40',
                iconPosition: 'middle'
            });
});

$(document).ready(function(){
    $(".close").click(function(){
        window.location="index.php?";
    });
});
