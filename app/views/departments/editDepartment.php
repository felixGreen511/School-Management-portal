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
            <div class="single-pro-review-area mt-t-30 mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st">
                            <ul id="myTabedu1" class="tab-review-design">
                                <li class="active"><a href="#description">Add Department</a></li>
                                <!-- <li><a href="#reviews"> Account Information</a></li>
                                <li><a href="#INFORMATION">Social Information</a></li> -->
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <form id="add-department" action="<?php echo URLROOT; ?>/departments/editDepartment/<?php echo $data['id']; ?>" method="POST" class="add-department">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="form-group">
                                                                <input name="department_name" type="text" class="form-control <?php echo (!empty($data['department_name_err'])) ? 'is-invalid' : '';?>" value="<?php echo $data['department_name'];?>" placeholder="Name">
                                                     

                                                            </div>
                                                            <div class="form-group">
                                                                <input name="department_head" type="text" class="form-control <?php echo (!empty($data['department_head_err'])) ? 'is-invalid' : '';?>" value="<?php echo $data['department_head'];?>" placeholder="Head of Department">
                       

                                                            </div>
                                                            <div class="form-group">
                                                                <input name="email" type="email" class="form-control <?php echo (!empty($data['email'])) ? 'is-invalid' : '';?>" value="<?php echo $data['email'];?>" placeholder="Email">
                                                                

                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="form-group">
                                                                <input name="mobile" type="number" class="form-control <?php echo (!empty($data['mobile_err'])) ? 'is-invalid' : '';?>" value="<?php echo $data['mobile'];?>" placeholder="Phone">
                                     

                                                            </div>
                                                            <div class="form-group">
                                                                <input name="number_students" type="number" class="form-control <?php echo (!empty($data['number_students_err'])) ? 'is-invalid' : '';?>" value="<?php echo $data['number_students'];?>" placeholder="No. of Students">
                                                            

                                                            </div>
                                                            <div class="form-group">
                                                                <input name="status" type="text" class="form-control <?php echo (!empty($data['status_err'])) ? 'is-invalid' : '';?>" value="<?php echo $data['status'];?>" placeholder="Status">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div class="payment-adress">
                                                                <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php require APPROOT . '/views/inc/footer.php'?>