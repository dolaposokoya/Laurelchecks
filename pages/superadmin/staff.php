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
                            <h2 class="content-header-title float-start mb-0">View Employee</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="dashboard.php">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="staff.php">Employee</a>
                                    </li>
                                    <li class="breadcrumb-item active">View Employee
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
                                            <th>id</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone No</th>
                                            <th>User Role</th>
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
                                    <h5 class="modal-title" id="exampleModalLabel">Create Employee</h5>
                                </div>
                                <div class="modal-body flex-grow-1">
                                <div class="row">
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
                                        <div class="col-12 col-sm-6 mb-1">
                                            <label class="form-label" for="accountOrganization">Organization</label>
                                            <input type="text" class="form-control" id="accountOrganization" name="organization" placeholder="Organization name" value="">
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
                                        <div class="col-12 col-sm-6 mb-1">
                                            <label class="form-label" for="accountNidCode">NID</label>
                                            <input type="text" class="form-control account-Nid-code" id="accountNidCode" name="NidCode" placeholder="Code" maxlength="6">
                                        </div>
                                        <div class="col-12 col-sm-6 mb-1" >
                                            <label for="Role" class="form-label">Role</label>
                                            <div class="position-relative" ><select id="Role" class="select2 form-select select2-hidden-accessible" "Role" tabindex="-1" aria-hidden="true">
                                                <option value="" >Select Role</option>
                                                <option value="Admin" >Admin</option>
                                                <option value="Employee" >Employee</option>
                                                <option value="Super Admin" >Super Admin</option>
                                            </select></div>
                                        </div>
                                        <div class="col-12 col-sm-6 mb-1" >
                                            <label for="Department" class="form-label">Department</label>
                                            <div class="position-relative" ><select id="Department" class="select2 form-select select2-hidden-accessible" "Department" tabindex="-1" aria-hidden="true">
                                                <option value="" >Select Department</option>
                                                <option value="HR" >HR</option>
                                                <option value="Support" >Support</option>
                                                <option value="Project Manager" >Project Manager</option>
                                                <option value="IT" >IT</option>
                                            </select></div>
                                        </div>
                                    </div>
                                    <div class="mb-1">
                                            <label for="Designation" class="form-label">Designation</label>
                                            <div class="position-relative" ><select id="Designation" class="select2 form-select select2-hidden-accessible" "Designation" tabindex="-1" aria-hidden="true">
                                                <option value="" >Select Designation</option>
                                                <option value="CEO" >CEO</option>
                                                <option value="Technical Specialist" >Technical Specialist</option>
                                                <option value="CTO" >CTO</option>
                                                <option value="Team Lead" >Team Lead</option>
                                            </select></div>
                                    </div>
                                    <div class="mb-1">
                                            <label for="Gender" class="form-label">Gender</label>
                                            <div class="position-relative" ><select id="Gender" class="select2 form-select select2-hidden-accessible" "Gender" tabindex="-1" aria-hidden="true">
                                                <option value="" >Select Gender</option>
                                                <option value="Male" >Male</option>
                                                <option value="Female" >Female</option>
                                            </select></div>
                                    </div>
                                    <div class="mb-1">
                                        <label class="form-label" for="basic-icon-default-date">Joining Date</label>
                                        <input type="text" class="form-control dt-date" id="basic-icon-default-date" placeholder="MM/DD/YYYY" aria-label="MM/DD/YYYY" />
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