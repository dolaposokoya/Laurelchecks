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
                                    <!-- <li class="breadcrumb-item"><a href="#"></a>
                                    </li> -->
                                    <li class="breadcrumb-item active">Conduct Checks
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            
            <div class="content-body">
                <section class="form-control-repeater">
                    <div class="row">
                        <!-- Checks -->
                <div class="row" id="table-bordered">
                    <div class="col-12">
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
                </div>
                <!-- checks -->
                    </div>
                </section>

            </div>
        </div>
    </div>
    <!-- END: Content-->
<?php include('navs/footer.php')?>