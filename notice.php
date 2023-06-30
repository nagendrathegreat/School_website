<?php ?>


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
    </div
    <?php include 'header.php' ?>

    <!-- start Main -->
    <main> 
        <div class="container">
            <aside>
                <a href="notice">Notice & Announcement</a>
                <a href="exam_notice">Examination Notice</a>
                <a href="#" title="This link redirect to the external website UPMSP">UP Board Notice</a>

            </aside>
            <div class="content" style="overflow-y: auto;">
                <fieldset>
                    <legend>
                        Notice & Announcement
                    </legend>
                    <marquee behavior="" height="300" direction="up" onmouseover="this.stop()" onmouseout="this.start()"
                        scrollamount="5" style="overflow">
                        <table style="border:0px;" class="table-notice">
                            <tr>
                                <td>दिनांक 24/०५/20२३ को छुट्टी घोषित होगी</td>
                                <td><a href="">Click Here</a></td>
                            </tr>
                            <tr>
                                <td>दिनांक 24/०५/20२३ को छुट्टी घोषित होगी</td>
                                <td><a href="">Click Here</a></td>
                            </tr>
                            <tr>
                                <td>दिनांक 24/०५/20२३ को छुट्टी घोषित होगी</td>
                                <td><a href="">Click Here</a></td>
                            </tr>
                        </table>
                    </marquee>

                </fieldset>
            </div>
        </div>
    </main>
    <!-- end Main -->



    <?php include 'footer.php' ?>

    <?php include 'footerlink.php' ?>
    <script>
        var preloader = document.getElementById('preloader');
        function myfunction() {
            preloader.style.display = 'none';
        }
    </script>
</body>

</html>