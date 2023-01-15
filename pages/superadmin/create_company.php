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
                            <h2 class="content-header-title float-start mb-0">Company</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="dashboard.php">Home</a>
                                    </li>
                                    <!-- <li class="breadcrumb-item"><a href="#"></a>
                                    </li> -->
                                    <li class="breadcrumb-item active">Create Company
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
                <!-- Validation -->
                <section class="bs-validation">
                    <div class="row">
                        <!-- Bootstrap Validation -->
                        <div class="col-md-6 col-12 m-auto">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Create Company</h4>
                                </div>
                                <div class="card-body">
                                    <form class="needs-validation" novalidate>
                                        <div class="mb-1">
                                            <label class="form-label" for="basic-addon-name">Company/Business Name</label>

                                            <input type="text" id="basic-addon-name" class="form-control" placeholder="Name" aria-label="Name" aria-describedby="basic-addon-name" required />
                                            <div class="valid-feedback"> </div>
                                            <div class="invalid-feedback">Please enter your name.</div>
                                        </div>
                                        <div class="mb-1">
                                            <label class="form-label" for="basic-addon-name">Owner's Name</label>

                                            <input type="text" id="basic-addon-name" class="form-control" placeholder="Name" aria-label="Name" aria-describedby="basic-addon-name" required />
                                            <div class="valid-feedback"> </div>
                                            <div class="invalid-feedback">Please enter your name.</div>
                                        </div>
                                        <div class="mb-1">
                                            <label class="form-label" for="basic-default-email1">Email</label>
                                            <input type="email" id="basic-default-email1" class="form-control" placeholder="john.doe@email.com" aria-label="john.doe@email.com" required />
                                            <div class="valid-feedback"> </div>
                                            <div class="invalid-feedback">Please enter a valid email</div>
                                        </div>
                                        <div class="mb-1">
                                            <label class="form-label" for="basic-default-phonenumber">Company Phone Number</label>
                                            <input type="number" id="basic-default-phonenumber" class="form-control" placeholder="Mobile" required />
                                            <div class="valid-feedback"> </div>
                                            <div class="invalid-feedback">Please enter a valid number</div>
                                        </div>
                                        <div class="mb-1">
                                            <label class="form-label" for="bscompany">Type of Company</label>
                                            <input type="text" class="form-control picker" name="company" id="bscompany" required />
                                            <div class="valid-feedback"> </div>
                                            <div class="invalid-feedback">Please enter a valid company type</div>
                                        </div>
                                        <div class="mb-1">
                                            <label class="form-label" for="select-country1">Country</label>
                                            <select class="form-select" id="select-country1" required>
                                                <option value="">Select Country</option>
                                                <option value="usa">USA</option>
                                                <option value="uk">UK</option>
                                                <option value="france">France</option>
                                                <option value="australia">Australia</option>
                                                <option value="spain">Spain</option>
                                            </select>
                                            <div class="valid-feedback"> </div>
                                            <div class="invalid-feedback">Please select your country</div>
                                        </div>
                                        <div class="mb-1">
                                            <label for="customFile1" class="form-label">Upload pic</label>
                                            <input class="form-control" type="file" id="customFile1" required />
                                        </div>
                                        <div class="mb-1">
                                            <label class="d-block form-label" for="validationBioBootstrap">Address</label>
                                            <textarea class="form-control" id="validationBioBootstrap" name="validationBioBootstrap" rows="3" required></textarea>
                                        </div>
                                        <div class="mb-1">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="validationCheckBootstrap" required />
                                                <label class="form-check-label" for="validationCheckBootstrap">Agree to our terms and conditions</label>
                                                <div class="invalid-feedback">You must agree before submitting.</div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Register</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- /Bootstrap Validation -->
                    </div>
                </section>
                <!-- /Validation -->

            </div>
        </div>
    </div>
    <!-- END: Content-->
<?php include('navs/footer.php')?>