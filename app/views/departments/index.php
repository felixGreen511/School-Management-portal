<!-- require the header file -->
<?php require_once APPROOT .'/views/inc/header.php';?>

<!-- require the sidebar file -->
<?php require_once APPROOT . '/views/inc/sidebar.php';?>
  <!-- Start Welcome area -->
  <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="<?php echo URLROOT; ?>"><img class="main-logo" src="<?php echo URLROOT; ?>/img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse"
                                                class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                                <i class="educate-icon educate-nav"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <!-- Require the second navbar -->
                                    <?php require APPROOT. '/views/inc/second-navbar.php'; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Mobile Menu start -->
            <?php require APPROOT. '/views/inc/mobile-sidebar.php'; ?>
            <!-- Mobile Menu end -->
            <div style="margin-bottom:50px"></div>
            <div class="product-status mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-status-wrap drp-lst">
                            <h4>Departments List</h4>
                            <div class="add-product">
                                <a href="<?php echo URLROOT; ?>/departments/addDepartment">Add Departments</a>
                            </div>
                            <div class="asset-inner">
                                <table>
                                    <tr>
                                        <th>No</th>
                                        <th>Name of Dept.</th>
                                        <th>Status</th>
                                        <th>Head</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>No. of Students</th>
                                        <th>Setting</th>
                                    </tr>

                                    <?php foreach($data['departments'] as $department):  ?>
                                    <tr>
                                        <td><?php echo $department->id; ?></td>
                                        <td><?php echo $department->department_name; ?></td>
                                        <td>
                                            <button class="pd-setting"><?php echo $department->status; ?></button>
                                        </td>
                                        <td><?php echo $department->department_head;?></td>
                                        <td><?php echo $department->email; ?></td>
                                        <td><?php echo $department->mobile;?></td>
                                        <td><?php echo $department->number_students;?></td>
                                        <td>
                                        <div class="col-lg-6">
                                            <a href="<?php echo URLROOT; ?>/departments/editDepartment/<?php echo $department->id; ?>" class="btn btn-info btn-sm">Edit</a>
                                            </div>
                                            <div class="col-lg-6">
                                            <form class="float-right" action="<?php echo URLROOT; ?>/departments/deleteDepartment/<?php echo $department->id;?>" method="POST"> 
                                            <input type="submit" value="Delete" class="btn btn-danger btn-sm">
                                            </div>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </table>
                            </div>
                            <div class="custom-pagination">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination">
                                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php require APPROOT . '/views/inc/footer.php'?>