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
                            <h2 class="content-header-title float-start mb-0">View Company</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="dashboard.php">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="create_company.php">Company</a>
                                    </li>
                                    <li class="breadcrumb-item active">View Company
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
                <!-- Row grouping -->
                <section id="row-grouping-datatable">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header border-bottom">
                                    <h4 class="card-title">View Company</h4>
                                </div>
                                <div class="card-datatable">
                                    <table class="dt-row-grouping table">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>Company Name</th>
                                                <th>Owner's Name</th>
                                                <th>Email</th>
                                                <th>City</th>
                                                <th>Phone No</th>
                                                <th>Address</th>
                                                <th>Company Type</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th></th>
                                                <th> Company Name</th>
                                                <th>Owner's Name</th>
                                                <th>Email</th>
                                                <th>City</th>
                                                <th>Phone No</th>
                                                <th>Address</th>
                                                <th>Company Type</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!--/ Row grouping -->


            </div>
        </div>
    </div>
    <!-- END: Content-->
<?php include('navs/footer.php')?>