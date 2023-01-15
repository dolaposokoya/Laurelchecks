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
                        <!-- Login basic -->
                        <div class="card mb-0">
                            <div class="card-body">
                                <a href="index.php" class="brand-logo">
                                <img class="w-5" src="../../app-assets/images/logo/logo.png" alt="Register V2" width="150px" height="100px"/>
                                </a>

                                <p class="card-text mb-2">Please sign-in to your account </p>

                                <form class="auth-register-form mt-2" action="login.php" method="POST">
                                    <div class="mb-1">
                                        <label for="register-username" class="form-label">Username</label>
                                        <input type="text" class="form-control" id="register-username" name="register-username" placeholder="johndoe" aria-describedby="register-username" tabindex="1" autofocus />
                                    </div>
                                    <div class="mb-1">
                                        <label for="register-email" class="form-label">Email</label>
                                        <input type="text" class="form-control" id="register-email" name="register-email" placeholder="john@example.com" aria-describedby="register-email" tabindex="2" />
                                    </div>
                                    <div class="mb-1">
                                            <label for="customFile" class="form-label">Upload Doc</label>
                                            <input class="form-control" type="file" id="customFile" name="customFile">
                                        </div>
                                    <!-- <div class="mb-1">
                                        <label for="register-email" class="form-label">Referee Email</label>
                                        <input type="text" class="form-control" id="register-email" name="register-email" placeholder="johnbees@example.com" aria-describedby="register-email" tabindex="2" />
                                    </div>
                                    <div class="mb-1">
                                        <label for="register-email" class="form-label"> Guarantor Email</label>
                                        <input type="text" class="form-control" id="register-email" name="register-email" placeholder="famsjohn@example.com" aria-describedby="register-email" tabindex="2" />
                                    </div> -->

                                    <div class="mb-1">
                                        <label for="register-password" class="form-label">Password</label>

                                        <div class="input-group input-group-merge form-password-toggle">
                                            <input type="password" class="form-control form-control-merge" id="register-password" name="register-password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="register-password" tabindex="3" />
                                            <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                                        </div>
                                    </div>
                                    <div class="mb-1">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="register-privacy-policy" tabindex="4" />
                                            <label class="form-check-label" for="register-privacy-policy">
                                                I agree to <a href="#">privacy policy & terms</a>
                                            </label>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary w-100" tabindex="5">Sign up</button>
                                </form>
                                
                            </div>
                        </div>
                        <!-- /Login basic -->
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- END: Content-->

    <?php include('nav/footer.php')?>
