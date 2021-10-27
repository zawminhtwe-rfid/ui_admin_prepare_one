<?php 
include('../config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sing Up Page</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="keywords"
        content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
    <meta name="author" content="Codedthemes" />
    <!-- Favicon icon -->
    <link rel="icon" href="<?php echo roothtml.'lib/assets/images/favicon.ico' ?>" type="image/x-icon">
    <!-- Google font-->
    <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet"> -->
    <!-- waves.css -->
    <link rel="stylesheet" href="<?php echo roothtml.'lib/assets/pages/waves/css/waves.min.css' ?>" type="text/css"
        media="all">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css"
        href="<?php echo roothtml.'lib/assets/css/bootstrap/css/bootstrap.min.css' ?>">
    <!-- waves.css -->
    <link rel="stylesheet" href="<?php echo roothtml.'lib/assets/pages/waves/css/waves.min.css' ?>" type="text/css"
        media="all">
    <!-- themify icon -->
    <link rel="stylesheet" type="text/css"
        href="<?php echo roothtml.'lib/assets/icon/themify-icons/themify-icons.css' ?>">
    <!-- font-awesome-n -->
    <link rel="stylesheet" type="text/css" href="<?php echo roothtml.'lib/assets/css/font-awesome-n.min.css' ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo roothtml.'lib/assets/css/font-awesome.min.css' ?>">
    <!-- scrollbar.css -->
    <link rel="stylesheet" type="text/css" href="<?php echo roothtml.'lib/assets/css/jquery.mCustomScrollbar.css' ?>">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="<?php echo roothtml.'lib/assets/css/style.css' ?>">
    <!-- Sweet Alarm -->
    <link href="<?php echo roothtml.'lib/sweet/sweetalert.css' ?>" rel="stylesheet" />
    <script src="<?php echo roothtml.'lib/sweet/sweetalert.min.js' ?>"></script>
    <script src="<?php echo roothtml.'lib/sweet/sweetalert.js' ?>"></script>
    <style>
    .loader {
        position: fixed;
        z-index: 999;
        height: 100%;
        width: 100%;
        top: 0;
        left: 0;
        background-color: Black;
        filter: alpha(opacity=60);
        opacity: 0.7;
        -moz-opacity: 0.8;
    }

    .center-load {
        z-index: 1000;
        margin: 300px auto;
        padding: 10px;
        width: 130px;
        background-color: black;
        border-radius: 10px;
        filter: 1;
        -moz-opacity: 1;
    }

    .center-load img {
        height: 128px;
        width: 128px;
    }
    </style>
</head>

<body themebg-pattern="theme1">
    <!-- show sweet alert -->
    <div class="loader" style="display:none;">
        <div class="center-load">
            <img src="<?php echo roothtml.'lib/assets/images/ajax-loader1.gif'; ?>" />
        </div>
    </div>

    <section class="login-block">
        <!-- Container-fluid starts -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <form class="md-float-material form-material">
                        <div class="text-center">
                            <img src="<?php echo roothtml.'lib/assets/images/login_logo.png' ?>" alt="logo.png">
                        </div>
                        <div class="auth-box card">
                            <div class="card-block">
                                <div class="row m-b-20">
                                    <div class="col-md-12">
                                        <h3 class="text-center txt-primary">Sign up</h3>
                                    </div>
                                </div>
                                <div class="form-group form-primary">
                                    <input type="text" name="user-name" class="form-control">
                                    <span class="form-bar"></span>
                                    <label class="float-label">Choose Username</label>
                                </div>
                                <div class="form-group form-primary">
                                    <input type="text" name="email" class="form-control">
                                    <span class="form-bar"></span>
                                    <label class="float-label">Your Email Address</label>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group form-primary">
                                            <input type="password" name="password" class="form-control">
                                            <span class="form-bar"></span>
                                            <label class="float-label">Password</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group form-primary">
                                            <input type="password" name="confirm-password" class="form-control">
                                            <span class="form-bar"></span>
                                            <label class="float-label">Confirm Password</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row m-t-25 text-left">
                                    <div class="col-md-12">
                                        <div class="checkbox-fade fade-in-primary">
                                            <label>
                                                <input type="checkbox" value="">
                                                <span class="cr"><i
                                                        class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                                <span class="text-inverse">I read and accept <a href="#">Terms &amp;
                                                        Conditions.</a></span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="checkbox-fade fade-in-primary">
                                            <label>
                                                <input type="checkbox" value="">
                                                <span class="cr"><i
                                                        class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                                <span class="text-inverse">Send me the <a href="#!">Newsletter</a>
                                                    weekly.</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <button type="button"
                                            class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">Sign
                                            up now</button>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkbox-fade fade-in-primary">
                                        <a href="<?php echo roothtml.'index.php' ?>" class="text-primary f-w-900"> Go To
                                            Login</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- end of col-sm-12 -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container-fluid -->
    </section>
    <!-- Required Jquery -->
    <script type="text/javascript" src="<?php echo roothtml.'lib/assets/js/jquery/jquery.min.js' ?> "></script>
    <script type="text/javascript" src="<?php echo roothtml.'lib/assets/js/jquery-ui/jquery-ui.min.js' ?> "></script>
    <script type="text/javascript" src="<?php echo roothtml.'lib/assets/js/popper.js/popper.min.js' ?>"></script>
    <script type="text/javascript" src="<?php echo roothtml.'lib/assets/js/bootstrap/js/bootstrap.min.js' ?> "></script>
    <!-- waves js -->
    <script src="<?php echo roothtml.'lib/assets/pages/waves/js/waves.min.js' ?>"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="<?php echo roothtml.'lib/assets/js/jquery-slimscroll/jquery.slimscroll.js' ?>">
    </script>

    <!-- slimscroll js -->
    <script src="<?php echo roothtml.'lib/assets/js/jquery.mCustomScrollbar.concat.min.js' ?> "></script>

    <!-- menu js -->
    <script src="<?php echo roothtml.'lib/assets/js/pcoded.min.js' ?>"></script>
    <script src="<?php echo roothtml.'lib/assets/js/vertical/vertical-layout.min.js' ?> "></script>

    <script type="text/javascript" src="<?php echo roothtml.'lib/assets/js/script.js' ?> "></script>
    <script>
    $(document).ajaxStart(function() {
        $(".loader").show();
    });

    $(document).ajaxComplete(function() {
        $(".loader").hide();
    });

    $(document).ajaxError(function() {
        swal('error', 'Ajax Error', 'error');
    });
    </script>
</body>

</html>