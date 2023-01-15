<?php include('navs/header.php')?>
<style type="text/css">
#bar {display:none;}
</style>

<script>
function show(el, txt){
    var elem1 = document.getElementById('bar');
   
    elem1.style.display = (txt == 'Admin') ? 'block' : 'none';
   
    }
</script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
$(document).ready(function(){
    $("select").change(function(){
        $(this).find("option:selected").each(function(){
            var optionValue = $(this).attr("value");
            if(optionValue){
                $(".state").not("." + optionValue).hide();
                $("." + optionValue).show();
            } else{
                $(".state").hide();
            }
        });
    }).change();
});
</script>
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
                <div class="auth-wrapper auth-cover">
                    <div class="auth-inner row m-0">
                        <!-- Brand logo--><a class="brand-logo" href="index.php">
                        <img class="w-5" src="app-assets/images/logo/logo.png" alt="Register V2" width="150px" height="100px"/>
                        </a>
                        <!-- /Brand logo-->
                        <!-- Left Text-->
                        <div class="d-none d-lg-flex col-lg-8 align-items-center p-5">
                            <div class="w-100 d-lg-flex align-items-center justify-content-center px-5"><img class="img-fluid" src="app-assets/images/pages/register-v2.svg" alt="Register V2" /></div>
                        </div>
                        <!-- /Left Text-->
                        <!-- Register-->
                        <div class="d-flex col-lg-4 align-items-center auth-bg px-2 p-lg-5">
                            <div class="col-12 col-sm-8 col-md-6 col-lg-12 px-xl-2 mx-auto">
                                <h2 class="card-title fw-bold mb-1">Register here 🚀</h2>
                                <p class="card-text mb-2">Make your management easy!</p>
                                <form class="auth-register-form mt-2" action="index.php" method="POST">
                                    <div class="mb-1">
                                        <label class="form-label" for="register-firstname">First Name</label>
                                        <input class="form-control" id="register-firstname" type="text" name="register-firstname" placeholder="john" aria-describedby="register-firstname" autofocus="" tabindex="1" />
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="register-lastname">Last Name</label>
                                        <input class="form-control" id="register-lastname" type="text" name="register-lastname" placeholder="doe" aria-describedby="register-lastname" autofocus="" tabindex="1" />
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="register-username">Username</label>
                                        <input class="form-control" id="register-username" type="text" name="register-username" placeholder="johndoe" aria-describedby="register-username" autofocus="" tabindex="1" />
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="register-email">Email</label>
                                        <input class="form-control" id="register-email" type="text" name="register-email" placeholder="john@example.com" aria-describedby="register-email" tabindex="2" />
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="basicSelect">Role</label>
                                        <select class="form-select" onChange="show('bar', this.options[this.selectedIndex].firstChild.nodeValue)">
                                            <option>Select Role</option>
                                            <option>Super Admin</option>
                                            <option>Admin</option>
                                        </select>
                                    </div>
                                    <div class="mb-1">
                                      <div id="bar">
                                        <label class="form-label" for="basicSelect">Assign Company</label>
                                        <select class="form-select"  id="basicSelect">
                                            <option>Select Company</option>
                                            <option>All Company</option>
                                            <option>First Bank</option>
                                            <option>Wema Bank</option>
                                        </select>
                                       </div>
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="register-password">Password</label>
                                        <div class="input-group input-group-merge form-password-toggle">
                                            <input class="form-control form-control-merge" id="register-password" type="password" name="register-password" placeholder="············" aria-describedby="register-password" tabindex="3" /><span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                                        </div>
                                    </div>
                                    <div class="mb-1">
                                        <div class="form-check">
                                            <input class="form-check-input" id="register-privacy-policy" type="checkbox" tabindex="4" />
                                            <label class="form-check-label" for="register-privacy-policy">I agree to<a href="#">&nbsp;privacy policy & terms</a></label>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary w-100" tabindex="5">Sign up</button>
                                </form>
                                <p class="text-center mt-2"><span>Already have an account?</span><a href="index.php"><span>&nbsp;Sign in instead</span></a></p>
                                
                            </div>
                        </div>
                        <!-- /Register-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Content-->
    <?php include('navs/header.php')?>
