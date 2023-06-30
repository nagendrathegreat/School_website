<?php
include 'connection.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- headerlink -->
    <?php include 'headerlink.php' ?>
</head>

<body onload="myfunction()">
    <!-- <div id="loading"></div> -->
    <div id="preloader">
        <div id="preloader-inner"></div>
    </div>
    <?php include 'header.php' ?>

    <!-- start Main -->
    <main>
        <!-- start of carosoul-->
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="img/school.jpg" alt="slider"></div>
                <div class="swiper-slide"><img src="img/school1.jpg" alt="slider"></div>
                <div class="swiper-slide"><img src="img/bg.png" alt="slider"></div>
                <div class="swiper-slide"><img src="img/school_banner.png" alt=""></div>
                <div class="swiper-slide">Slide 5</div>
                <div class="swiper-slide">Slide 6</div>
                <div class="swiper-slide">Slide 7</div>
                <div class="swiper-slide">Slide 8</div>
                <div class="swiper-slide">Slide 9</div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>

        <!--End of Carsoul-->
        <!--Start About Section-->
        <div class="about-top">
            <div class="about-in"><img src="img/about-pic/yogi.jpg" alt="cm">
                <span>Shri Yogi Aditynath<br />
                    <p>Hon'ble Chief Minister</p>
                </span>
            </div>
            <div class="about-in"><img src="img/about-pic/yogi.jpg" alt="cm">
                <span>Shri Yogi Aditynath<br />
                    <p>Hon'ble Education Minister</p>
                </span>
            </div>
            <div class="about-in"><img src="img/about-pic/yogi.jpg" alt="cm">
                <span>Shri Yogi Aditynath<br />
                    <p>Hon'ble Principal</p>
                </span>
            </div>
        </div>
        <div class="about-bot">
            <div class="about-us" id="notification">
                <div class="tab" id="tab">
                    <!-- <ul>
                        <li class="tab-content" id="tab1" onClick="myFunction()">Notice</li>
                        <li class="tab-content" id="tab2" onClick="myFunction()">News</li>
                    </ul> -->
                    <button class="tabpane" id="tab1" onClick="openPage('event','Notice',)"><i
                            class="fa-solid fa-message-dots"></i>&nbsp;Notice</button>
                    <button class="tabpane" id="tab2" onClick="openPage('event','News',)"><i
                            class="fa-solid fa-newspaper"></i>&nbsp;News</button>
                    <div id="Notice" class="tabcontent">
                        <marquee behavior="" height="270" direction="up" onmouseover="this.stop()"
                            onmouseout="this.start()" scrollamount="10" style="overflow">
                            <table style="border:0px;" class="notice-table">
                                <tr>
                                    <td>दिनांक 24/०५/20२३ को छुट्टी घोषित होग
                                        &emsp;&emsp;<span> <a href="">Click Here</a></span></td>
                                </tr>
                                <tr>
                                    <td>दिनांक 24/०५/20२३ को छुट्टी घोषित होगी
                                        &emsp;&emsp;<span> <a href="">Click Here</a></span></td>
                                </tr>
                                <tr>
                                    <td>दिनांक 24/०५/20२३ को छुट्टी घोषित होगी
                                        &emsp;&emsp;<span> <a href="">Click Here</a></span></td>
                                </tr>
                            </table>
                        </marquee>
                    </div>
                    <div id="News" class="tabcontent">Contrary to popular belief, Lorem Ipsum is not simply random text.
                        It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.
                        Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of
                        the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the
                        cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes

                    </div>
                </div>

            </div>
            <div class="about-us" id="about-institute">

                <div class="about-mid">
                    <h3>About US</h3>
                    <p>&emsp;&emsp;&emsp;किसी व्यक्ति की एकान्तता, परिवार, घर या पत्रव्यवहार के प्रति कोई मनमाना
                        हस्तक्षेप न किया जाएगा, न किसी के सम्मान और ख्याति पर कोई आक्षेप हो सकेगा । ऐसे हस्तक्षेप या
                        आधेपों के विरुद्ध प्रत्येक को क़ानूनी रक्षा का अधिकार प्राप्त है । प्रत्येक व्यक्ति को विचार,
                        अन्तरात्मा और धर्म की आज़ादी का अधिकार है । इस अधिकार के अन्तर्गत अपना धर्म या विश्वास बदलने और
                        अकेले या दूसरों के साथ मिलकर तथा सार्वजनिक रूप में अथवा निजी तोर पर अपने धर्म या विश्वास को
                        शिक्षा, क्रिया, उपासना, तथा व्यवहार के द्वारा प्रकट करने की स्वतन्त्रता है ।
                        <br />
                        &emsp;&emsp;&emsp;
                        लोरेम इप्सम केवल यादृच्छिक पाठ नहीं है, लोकप्रिय धारणा के विपरीत है। शास्त्रीय लैटिन साहित्य में
                        इसकी उत्पत्ति का
                        पता 45 ईसा पूर्व में लगाया जा सकता है, जिससे यह 2000 वर्ष से अधिक पुराना हो गया है।
                        लोरेम इप्सम केवल यादृच्छिक पाठ नहीं है, लोकप्रिय धारणा के विपरीत है। शास्त्रीय लैटिन साहित्य में
                        इसकी उत्पत्ति का
                        पता 45 ईसा पूर्व में लगाया जा सकता है, जिससे यह 2000 वर्ष से अधिक पुराना हो गया है।
                        अनुवाद भी शामिल हैं।
                        <button><a href="">Read More...</a></button>
                    </p>

                </div>
            </div>
        </div>


        <!--End of about Section-->

        <!-- start of hero section -->
        <div class="hero">

        </div>
        <!-- End of hero section -->

    </main>
    <!-- end Main -->



    <?php include 'footer.php' ?>
<script>
    var preloader = document.getElementById('preloader');
        function myfunction() {
            preloader.style.display = 'none';
        }
</script>




</body>
<?php include 'footerlink.php' ?>


<!-- <script src="/js/jquery.goTop.js"></script>
    <script>
        $(function () {
            $('#go-top').goTop({
                scrollTop: 150,
                scrollSpeed: 1000,
                fadeInSpeed: 1000,
                fadeOutSpeed: 500
            })
        })
    </script> -->

</html>