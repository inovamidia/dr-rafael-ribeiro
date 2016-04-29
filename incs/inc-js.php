<!-- JQUERY -->
<script type="text/javascript" src="http://www.caixaassistencianacional.com.br/js/jquery.js"></script>
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

<script>
    $(function(){
        $(".link-medico").click(function() {
            $(".popup-medico").show();
            $(".popup-medico").animate({right: '0px'});
        });
        $(".link-fechar").click(function() {
            $(".popup-medico").animate({right: '-250px'});
            $(".popup-medico").hide();
        });
    })

    $(function(){
        var page = $("body").attr("id");
        $("nav a[data='"+page+"']").addClass("active");
    });
</script>
