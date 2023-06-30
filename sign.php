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

   
                <div class="form-group">
                    <fieldset>
                        <legend>
                            Admin Login</legend>
                        <!-- <h2>Admin Login <hr></h2> -->

                        <form method="post" action="#" id="login-form" >
                            <div class="form-control">
                                <label for="email">Username:</label>
                                <input type="email" id="email" name="email" placeholder="Enter Username or email"
                                    required>
                            </div>
                            <div class="form-control">
                                <label for="password">Password:</label>
                                <input type="password" id="password" name="password" placeholder="Enter Your password"
                                    required>
                            </div>
                            <div class="form-control">

                                <input type="submit" id="login-btn" Value="Login">
                            </div>


                        </form>
                    </fieldset>
                </div>
               

    <?php include 'footer.php' ?>

   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ajaxy/1.6.1/scripts/jquery.ajaxy.min.js" integrity="sha512-bztGAvCE/3+a1Oh0gUro7BHukf6v7zpzrAb3ReWAVrt+bVNNphcl2tDTKCBr5zk7iEDmQ2Bv401fX3jeVXGIcA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
   $(document).ready(function() {
    $("#login-form").submit(function(){
        $.ajax({
            data:$(this).serialize(),
            type:$(this).attr('method'),
            url:$(this).attr('action'),
            success:function(){

            }
        });
        return false;
    });
   });
</script>
<?php include 'footerlink.php' ?>
    <script>
        var preloader = document.getElementById('preloader');
        function myfunction() {
            preloader.style.display = 'none';
        }
    </script>
</body>

</html>