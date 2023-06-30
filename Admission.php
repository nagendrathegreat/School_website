<?php  ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <!-- headerlink -->
    <?php include 'headerlink.php'?>
</head>
<body onload="myfunction()">
    <!-- <div id="loading"></div> -->
    <div id="preloader">
        <div id="preloader-inner"></div>
    </div>
    <?php include 'header.php'?>

    <!-- start Main -->
    <main>
        <div class="container">
            <aside>
                <a href="introduction">Introduction</a>
                <a href="Pr">Principal Message</a>
                <a href="Mission">Mission & Vision</a>
                <a href="Admission">Admission Form</a>
            </aside>
            <div class="content">
                <fieldset>
                    <legend>
                        Admission Form
                    </legend>
                   <p>Admission Form Coming Soon!</p>
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