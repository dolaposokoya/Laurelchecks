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
                            <h2 class="content-header-title float-start mb-0">Conduct Checks</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="dashboard.php">Home</a>
                                    </li>
                                    <!-- <li class="breadcrumb-item"><a href=""></a>
                                    </li> -->
                                    <li class="breadcrumb-item active">View Conduct Checks
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
                <!-- Basic table -->
                <section id="basic-datatable">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <table class="datatables-basic table">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                            <th>Name</th>
                                            <th>User Role</th>
                                            <th>Email</th>
                                            <th>Job Progress</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- Modal to add new record -->
                    <div class="modal modal-slide-in fade" id="modals-slide-in">
                        <div class="modal-dialog sidebar-sm">
                            <form class="add-new-record modal-content pt-0">
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">×</button>
                                <div class="modal-header mb-1">
                                    <h5 class="modal-title" id="exampleModalLabel">Conduct Checks</h5>
                                </div>
                                <div class="modal-body flex-grow-1">
                                <div class="row">
                                              <div class="mb-1">
                                                    <label class="form-label" for="Batch-column">Batch No</label>
                                                    <input type="number" id="Batch-column" class="form-control" name="Batch-column" placeholder="Batch">
                                                </div>
                                        <div class="col-12 col-sm-6 mb-1">
                                            <label class="form-label" for="accountFirstName">First Name</label>
                                            <input type="text" class="form-control" id="accountFirstName" name="firstName" placeholder="John" value="John" data-msg="Please enter first name">
                                        </div>
                                        <div class="col-12 col-sm-6 mb-1">
                                            <label class="form-label" for="accountLastName">Last Name</label>
                                            <input type="text" class="form-control" id="accountLastName" name="lastName" placeholder="Doe" value="Doe" data-msg="Please enter last name">
                                        </div>
                                        <div class="col-12 col-sm-6 mb-1">
                                            <label class="form-label" for="accountEmail">Email</label>
                                            <input type="email" class="form-control" id="accountEmail" name="email" placeholder="johndoe@gmail.com" value="">
                                        </div>
                                        <div class="col-12 col-sm-6 mb-1" >
                                            <label for="Role" class="form-label">Role</label>
                                            <div class="position-relative" >
                                                <select id="Role" class="form-control"   tabindex="-1" aria-hidden="true">
                                                <option value="" >Select Role</option>
                                                <option value="Admin" >Admin</option>
                                                <option value="Employee" >Employee</option>
                                                <option value="Super Admin" >Super Admin</option>
                                            </select></div>
                                        </div>
                                        <div class="mb-1">
                                            <label class="d-block form-label" for="validationBio">Information</label>
                                            <textarea class="form-control" id="validationBio" name="validationBiojq" rows="3"></textarea>
                                        </div>
                                    </div>
                                    <button type="button" class="btn btn-primary data-submit me-1">Submit</button>
                                    <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </section>
                <!--/ Basic table -->


            </div>
        </div>
    </div>
    <!-- END: Content-->
<?php include('navs/footer.php')?>