 <!-- <script src="fontawesomepro/js/pro.js"></script>
        <script src="fontawesomepro/js/pro.min.js"></script> -->
    <!-- scriptJS for tabbed content -->
    
   
    <script src="js/sticky.js" type="text/javascript"></script>
    <script src="js/script.js" type="text/javascript"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script> -->
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 30,
            centeredSlides: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
    <!--Scripts-->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->

    <script src="https://code.jquery.com/jquery-1.12.4.min.js"
        integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ"
        crossorigin="anonymous"></script>
        <script src="js/ace-responsive-menu-min.js"></script>
    <script src="js/ace-responsive-menu.js" type="text/javascript"></script>
    <!--Plugin Initialization-->
    <script type="text/javascript">
        $(document).ready(function () {
            $("#respMenu").aceResponsiveMenu({
                resizeWidth: '768', // Set the same in Media query
                animationSpeed: 'fast', //slow, medium, fast
                accoridonExpAll: false //Expands all the accordion menu on click
            });
        });
    </script>

    
    <!-- jQuery Modal -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    
    
<script src="js/jquery.goTop.js"></script>

<script>
  $(function () {
    $('#go-top').goTop({
      scrollTop: 100,
      scrollSpeed: 1000,
      fadeInSpeed: 2000,
      fadeOutSpeed: 500
    })
  })
</script>

