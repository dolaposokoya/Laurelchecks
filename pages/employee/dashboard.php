<?php include('navs/header.php')?>


    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- Dashboard Ecommerce Starts -->
                <section class="app-user-list">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <div class="card">
                                <div class="card-body d-flex align-items-center justify-content-between">
                                    <div>
                                        <h3 class="fw-bolder mb-75">21,459</h3>
                                        <span>Total Users</span>
                                    </div>
                                    <div class="avatar bg-light-primary p-50">
                                        <span class="avatar-content">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user font-medium-4"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="card">
                                <div class="card-body d-flex align-items-center justify-content-between">
                                    <div>
                                        <h3 class="fw-bolder mb-75">4,567</h3>
                                        <span>Guarantor</span>
                                    </div>
                                    <div class="avatar bg-light-danger p-50">
                                        <span class="avatar-content">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-plus font-medium-4"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><line x1="20" y1="8" x2="20" y2="14"></line><line x1="23" y1="11" x2="17" y2="11"></line></svg>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="card">
                                <div class="card-body d-flex align-items-center justify-content-between">
                                    <div>
                                        <h3 class="fw-bolder mb-75">19,860</h3>
                                        <span>Referee</span>
                                    </div>
                                    <div class="avatar bg-light-success p-50">
                                        <span class="avatar-content">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-check font-medium-4"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><polyline points="17 11 19 13 23 9"></polyline></svg>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="card">
                                <div class="card-body d-flex align-items-center justify-content-between">
                                    <div>
                                        <h3 class="fw-bolder mb-75">237</h3>
                                        <span>Pending Actions</span>
                                    </div>
                                    <div class="avatar bg-light-warning p-50">
                                        <span class="avatar-content">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-x font-medium-4"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><line x1="18" y1="8" x2="23" y2="13"></line><line x1="23" y1="8" x2="18" y2="13"></line></svg>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                 
                </section>
                <!-- Dashboard ends -->


                <div class="content-body">
                <div class="row match-height">
                        <!-- Timeline Card -->
                        <div class="col-lg-8 col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Conduct Checks List</h4>
                            </div>
                            
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Guarantor Email</th>
                                            <th>Referee Email</th>
                                            <th>Date</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <span class="fw-bold">Angular Johnson</span>
                                            </td>
                                            <td>Peter Charls</td>
                                            <td>
                                               November 2, 2022
                                            </td>
                                            <td><span class="badge rounded-pill badge-light-primary me-1">Approved</span></td>
                                        </tr>
                                        <tr>
                                        <td>
                                            <span class="fw-bold">Angular Johnson</span>
                                            </td>
                                            <td>Peter Charls</td>
                                            <td>
                                               November 2, 2022
                                            </td>
                                            <td><span class="badge rounded-pill badge-light-warning me-1">Pending</span></td>
                                        </tr>
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        </div>
                        <!--/ Timeline Card -->

                        <!-- Sales Stats Chart Card starts -->
                        <div class="col-lg-4  col-12" id="table-bordered">
                        <div class="card card-user-timeline">
                                <div class="card-header">
                                    <div class="d-flex align-items-center">
                                        <i data-feather="list" class="user-timeline-title-icon"></i>
                                        <h4 class="card-title">User Notice</h4>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <ul class="timeline ms-50">
                                        <li class="timeline-item">
                                            <span class="timeline-point timeline-point-indicator"></span>
                                            <div class="timeline-event">
                                                <h6>Guarantor has been approved</h6>
                                            </div>
                                        </li>
                                        <li class="timeline-item">
                                            <span class="timeline-point timeline-point-danger timeline-point-indicator"></span>
                                            <div class="timeline-event">
                                                <h6>Guarantor has been approved</h6>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Sales Stats Chart Card ends -->

                       
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- END: Content-->
    <?php include('navs/footer.php')?>