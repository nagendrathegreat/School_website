<?php ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- headerlink -->
    <?php include 'headerlink.php' ?>
</head>

<body onLoad="myfunction()">
    <!-- <div id="loading"></div> -->
    <div id="preloader">
        <div id="preloader-inner"></div>
    </div>
    <?php include 'header.php' ?>

    <!-- start Main -->
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