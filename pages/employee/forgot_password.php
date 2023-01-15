<?php include('nav/header.php')?>
<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern blank-page navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="blank-page">
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <div class="auth-wrapper auth-basic px-2">
                    <div class="auth-inner my-2">
                        <!-- Reset Password basic -->
                        <div class="card mb-0">
                            <div class="card-body">
                                <a href="login.php" class="brand-logo">
                                <img class="w-5" src="../../app-assets/images/logo/logo.png" alt="Register V2" width="150px" height="100px"/>
                                </a>

                                <h4 class="card-title mb-1">Forgot Password? 🔒</h4>
                                <p class="card-text mb-2">Enter your email and we'll send you instructions to reset your password</p>

                                <form class="auth-forgot-password-form mt-2" action="login.php" method="POST">
                                    <div class="mb-1">
                                        <label for="forgot-password-email" class="form-label">Email</label>
                                        <input type="text" class="form-control" id="forgot-password-email" name="forgot-password-email" placeholder="john@example.com" aria-describedby="forgot-password-email" tabindex="1" autofocus />
                                    </div>
                                    <button class="btn btn-primary w-100" tabindex="2">Send reset link</button>
                                </form>

                                <p class="text-center mt-2">
                                    <a href="login.php"> <i data-feather="chevron-left"></i> Back to login </a>
                                </p>
                            </div>
                        </div>
                        <!-- /Reset Password basic -->
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- END: Content-->
    <?php include('nav/header.php')?>