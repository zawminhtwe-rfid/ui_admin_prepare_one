<?php 
include('config.php');
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> App landing</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo roothtml.'lib/img/logo19.png' ?>">

    <!-- CSS here -->
    <link rel="stylesheet" href="<?php echo roothtml.'lib/css/bootstrap.min.css' ?>">
    <link rel="stylesheet" href="<?php echo roothtml.'lib/css/all.min.css' ?>">
    <link rel="stylesheet" href="<?php echo roothtml.'lib/css/style.css' ?>">
    <link rel="stylesheet" href="<?php echo roothtml.'lib/css/my_css.css' ?>">
    <!-- sweetalert -->
    <link href="<?php echo roothtml.'lib/sweet/sweetalert.css' ?>" rel="stylesheet" />
    <script src="<?php echo roothtml.'lib/sweet/sweetalert.min.js' ?>"></script>
    <script src="<?php echo roothtml.'lib/sweet/sweetalert.js' ?>"></script>
</head>

<body>
    <main class="login-body" data-vide-bg="<?php echo roothtml.'lib/img/login-bg.mp4' ?>">
        <!-- Login Admin -->
        <form class="form-default" method="POST">

            <div class="login-form">
                <h2 class="text-danger" style="font-size:70px;">404</h2>
                <h2>Page Not Found</h2>
                <div class="form-input mt-2">
                    <input type="button" id="btnlogin" name="submit" value="Go To Login">
                </div>
            </div>
        </form>
        <!-- /end login form -->
    </main>

    <!-- 
    <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script> -->
    <!-- Jquery, Popper, Bootstrap -->
    <script src="<?php echo roothtml.'lib/js/jquery-3.4.1.min.js' ?>"></script>
    <script src="<?php echo roothtml.'lib/js/bootstrap.bundle.min.js' ?>"></script>

    <!-- Video bg -->
    <script src="<?php echo roothtml.'lib/js/jquery.vide.js' ?>"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="<?php echo roothtml.'lib/js/main.js' ?>"></script>

    <script>  


    $(document).on("click", "#btnlogin", function(e) {        
      location.href = "<?php echo roothtml.'index.php' ?>";
    });
    </script>

</body>

</html>