<?php ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- headerlink -->
    <?php include 'headerlink.php' ?>
</head>

<body onload="myfunction()">
    <div id="preloader">
        <div id="preloader-inner"></div>
    </div>
    <?php include 'header.php' ?>

    <!-- start Main -->
    <main>
        <div class="container">
            <aside>
                <a href="gallery">Gallery</a>
                <a href="media-gallery">Media Gallery</a>

            </aside>
            <div class="content">
                <fieldset>
                    <legend>
                        Gallery
                    </legend>

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