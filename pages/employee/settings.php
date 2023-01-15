<?php include('navs/header.php')?>

<!-- BEGIN: Content-->
<div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0">Settings</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="dashboard.php">Home</a>
                                    </li>
                                    <!-- <li class="breadcrumb-item"><a href="#"></a>
                                    </li> -->
                                    <li class="breadcrumb-item active">Settings
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                    
                </div>
            </div>
            <div class="content-body">
            <div class="content-body">
                <div class="row">
                    <div class="col-12">
                        <ul class="nav nav-pills mb-2">
                            <!-- account -->
                            <li class="nav-item">
                                <a class="nav-link active" href="settings.php">
                                    <i data-feather="user" class="font-medium-3 me-50"></i>
                                    <span class="fw-bold">Account</span>
                                </a>
                            </li>
                        </ul>

                        <!-- profile -->
                        <div class="card">
                            <div class="card-header border-bottom">
                                <h4 class="card-title">Profile Details</h4>
                            </div>
                            <div class="card-body py-2 my-25">
                                <!-- header section -->
                                <div class="d-flex">
                                    <a href="#" class="me-25">
                                        <img src="../../app-assets/images/portrait/small/avatar-s-23.jpg" id="account-upload-img" class="uploadedAvatar rounded me-50" alt="profile image" height="100" width="100" />
                                    </a>
                                    <!-- upload and reset button -->
                                    <div class="d-flex align-items-end mt-75 ms-1">
                                        <div>
                                            <label for="account-upload" class="btn btn-sm btn-primary mb-75 me-75">Upload</label>
                                            <input type="file" id="account-upload" hidden accept="image/*" />
                                            <button type="button" id="account-reset" class="btn btn-sm btn-outline-secondary mb-75">Reset</button>
                                            <p class="mb-0">Allowed file types: png, jpg, jpeg.</p>
                                        </div>
                                    </div>
                                    <!--/ upload and reset button -->
                                </div>
                                <!--/ header section -->

                                <!-- form -->
                                <form class="validate-form mt-2 pt-50">
                                    <div class="row">
                                        <div class="col-12 col-sm-6 mb-1">
                                            <label class="form-label" for="accountFirstName">First Name</label>
                                            <input type="text" class="form-control" id="accountFirstName" name="firstName" placeholder="John" value="John" data-msg="Please enter first name" />
                                        </div>
                                        <div class="col-12 col-sm-6 mb-1">
                                            <label class="form-label" for="accountLastName">Last Name</label>
                                            <input type="text" class="form-control" id="accountLastName" name="lastName" placeholder="Doe" value="Doe" data-msg="Please enter last name" />
                                        </div>
                                        <div class="col-12 col-sm-6 mb-1">
                                            <label class="form-label" for="accountEmail">Email</label>
                                            <input type="email" class="form-control" id="accountEmail" name="email" placeholder="Email" value="johndoe@gmail.com" />
                                        </div>
                                        <div class="col-12 col-sm-6 mb-1">
                                            <label class="form-label" for="accountAddress">Address</label>
                                            <input type="text" class="form-control" id="accountAddress" name="address" placeholder="Your Address">
                                        </div>
                                        <div class="col-12 col-sm-6 mb-1">
                                            <label for="role" class="form-label">Role</label>
                                            <select id="role" class="select2 form-select">
                                                <option value="">Select role</option>
                                                <option value="superdmin">Super Admin</option>
                                                <option value="admin">Admin</option>
                                            </select>
                                        </div>
                                        <div class="col-12 col-sm-6 mb-1">
                                            <label class="d-block form-label">Gender</label>
                                            <div class="form-check my-50">
                                                <input type="radio" id="validationRadiojq1" name="validationRadiojq" class="form-check-input">
                                                <label class="form-check-label" for="validationRadiojq1">Male</label>
                                            </div>
                                            <div class="form-check">
                                                <input type="radio" id="validationRadiojq2" name="validationRadiojq" class="form-check-input">
                                                <label class="form-check-label" for="validationRadiojq2">Female</label>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-6 mb-1">
                                              <label class="form-label" for="basic-icon-default-date">Joining Date</label>
                                                <input type="text" class="form-control dt-date" id="basic-icon-default-date" placeholder="MM/DD/YYYY" aria-label="MM/DD/YYYY" />
                                        </div>
                                        <div class="col-12 col-sm-6 mb-1">
                                            <label class="form-label" for="accountPhoneNumber">Phone Number</label>
                                            <input type="text" class="form-control account-number-mask" id="accountPhoneNumber" name="phoneNumber" placeholder="Phone Number" value="">
                                        </div>
                                        <div class="col-12 col-sm-6 mb-1">
                                            <label class="form-label" for="accountUsername">Username</label>
                                            <input type="text" class="form-control" id="accountUsername" name="Username" placeholder="Your Username">
                                        </div>
                                        <div class="col-12 col-sm-6 mb-1">
                                            <label class="form-label" for="dob">Date of Birth</label>
                                            <input type="date" class="form-control picker flatpickr-input active" name="dob" id="bsDob" required="">
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-primary mt-1 me-1">Save changes</button>
                                            <button type="reset" class="btn btn-outline-secondary mt-1">Discard</button>
                                        </div>
                                    </div>
                                </form>
                                <!--/ form -->
                            </div>
                        </div>

                        <!--/ profile -->
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- END: Content-->

            </div>
        </div>
    </div>
    <!-- END: Content-->
<?php include('navs/footer.php')?>