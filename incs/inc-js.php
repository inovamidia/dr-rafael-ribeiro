<!-- JQUERY -->
<script src="js/jquery-1.9.1.min.js"></script>
<!-- / JQUERY -->

<!-- TWITTER BOOTSTRAP 3 -->
<script src="js/bootstrap.min.js"></script>
<!-- / TWITTER BOOTSTRAP 3 -->

<!-- Carousel -->
<script>
$(function(){
  $('.carousel').carousel({
      interval: 5000
    })
})
</script>
<!-- / Carousel -->

<!-- idTabs -->
<script src="js/idTabs/jquery.idTabs.min.js"></script>
<script type="text/javascript"> 
    $("#usual1 ul").idTabs(); 
</script>
<!-- idTabs -->
         
 
<!-- Owl Carousel -->
<script src="js/owl-carousel/owl.carousel.min.js"></script>
<script>
    $(function($) {
        $("#owl-banner").owlCarousel({
            items : 1,
            autoPlay : true,
            stopOnHover : false  ,
            navigation : false, // Show next and prev buttons
            slideSpeed : 300,
            paginationSpeed : 400,
            singleItem:true
        });
        $("#owl-noticias").owlCarousel({
            items : 1,
            autoPlay : false,
            stopOnHover : false  ,
            navigation : true, // Show next and prev buttons
            singleItem:true
        });
    });
</script>
<!-- / Owl Carousel -->

<script>
$(function($) {
    $(".link-materia").hover(function() {
        var texto = $(this).find(".texto");
        texto.css({'text-decoration':'underline'});
        var figure = $(this).find(".figure");
        figure.css({'-webkit-filter':'brightness(120%)'});
        var figuredestaque = $(this).find(".figure-destaque");
        figuredestaque.css({'-webkit-filter':'brightness(120%)'});
        var img = $(this).find(".figure img");
        img.css({'border':'2px solid #666'});
        var imgdestaque = $(this).find(".figure-destaque img");
        imgdestaque.css({'border':'2px solid #666'});
    }, function() {
        var texto = $(this).find(".texto");
        texto.css({'text-decoration':'none'});
        var figure = $(this).find(".figure");
        figure.css({'-webkit-filter':'brightness(100%)'});
        var figuredestaque = $(this).find(".figure-destaque");
        figuredestaque.css({'-webkit-filter':'brightness(100%)'});
        var img = $(this).find(".figure img");
        img.css({'border':'2px solid #fff'});
        var imgdestaque = $(this).find(".figure-destaque img");
        imgdestaque.css({'border':'2px solid #fff'});
    });	
});
</script>