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
                                <center>
                                <li class="active"><a href="#description">Basic Information</a></li>
                                </center>
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div id="dropzone1" class="pro-ad">
                                                    <form action="<?php echo URLROOT; ?>/students/addStudent" class="" id="demo1-upload" method="POST">
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="form-group">
                                                                    <input name="firstname" type="text" class="form-control <?php echo (!empty($data['firstname_err'])) ? 'is-invalid'  : '' ; ?>" value="<?php echo $data['firstname']; ?>" placeholder="FirstName">
                                                                    <span class="invalid-feedback"><?php echo $data['firstname_err']; ?></span>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="surname" type="text" class="form-control <?php echo (!empty($data['surname_err'])) ? 'is-invalid'  : '' ; ?>" value="<?php echo $data['surname']; ?>" placeholder="Surname">
                                                                    <span class="invalid-feedback"><?php echo $data['surname_err']; ?></span>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="email" type="email" class="form-control <?php echo (!empty($data['email_err'])) ? 'is-invalid'  : '' ; ?>" value="<?php echo $data['email']; ?>" placeholder="Your Email">
                                                                    <span class="invalid-feedback"><?php echo $data['email_err']; ?></span>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="mobile_number" type="number" class="form-control <?php echo (!empty($data['mobile_number_err'])) ? 'is-invalid'  : '' ; ?>" value="<?php echo $data['mobile_number']; ?>" placeholder="Mobile Number">
                                                                    <span class="invalid-feedback"><?php echo $data['mobile_number_err']; ?></span>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="dob" type="date" class="form-control <?php echo (!empty($data['dob_err'])) ? 'is-invalid'  : '' ; ?>" value="<?php echo $data['dob']; ?>" placeholder="Enter Date Of birth">
                                                                    <span class="invalid-feedback"><?php echo $data['dob_err']; ?></span>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="address" id="finish" type="text" class="form-control <?php echo (!empty($data['address_err'])) ? 'is-invalid'  : '' ; ?>" value="<?php echo $data['address']; ?>" placeholder="Address">
                                                                    <span class="invalid-feedback"><?php echo $data['address_err']; ?></span>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="post_code" id="postcode" type="number" class="form-control <?php echo (!empty($data['post_code_err'])) ? 'is-invalid'  : '' ; ?>" value="<?php echo $data['post_code']; ?>" placeholder="Postcode">
                                                                    <span class="invalid-feedback"><?php echo $data['post_code_err']; ?></span>
                                                                </div>
                                                                <div class="form-group alert-up-pd">
                                                                    <div class="form-group">
                                                                       
                                                                        <input name="image" class="form-control <?php echo (!empty($data['image_err'])) ? 'is-invalid'  : '' ; ?>" value="<?php echo $data['image']; ?>" type="file" />
                                                                        <span class="invalid-feedback"><?php echo $data['image_err']; ?></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="form-group">
                                                                    <input name="department" type="text" class="form-control <?php echo (!empty($data['department_err'])) ? 'is-invalid'  : '' ; ?>" value="<?php echo $data['department']; ?>" placeholder="Department">
                                                                    <span class="invalid-feedback"><?php echo $data['department_err']; ?></span>
                                                                </div>
                                                                <div class="form-group res-mg-t-15">
                                                                    <textarea name="description" class="form-control <?php echo (!empty($data['description_err'])) ? 'is-invalid'  : '' ; ?>" placeholder="Description">
                                                                    <?php echo $data['description']; ?>
                                                                    </textarea>
                                                                    <span class="invalid-feedback"><?php echo $data['description_err']; ?></span>
                                                                </div>
                                                                <div class="form-group">
                                                                <input name="gender" type="text" class="form-control <?php echo (!empty($data['gender_err'])) ? 'is-invalid'  : '' ; ?>" value="<?php echo $data['gender']; ?>" placeholder="Please Enter gender">
                                                                <span class="invalid-feedback"><?php echo $data['gender_err']; ?></span>
                                                                </div>
                                                                <div class="form-group">
                                                                <input name="country" type="text" class="form-control <?php echo (!empty($data['country_err'])) ? 'is-invalid'  : '' ; ?>" value="<?php echo $data['country']; ?>" placeholder="Please Enter Country">
                                                                <span class="invalid-feedback"><?php echo $data['country_err']; ?></span>
                                                                </div>
                                                                <div class="form-group">
                                                                <input name="state" type="text" class="form-control <?php echo (!empty($data['state_err'])) ? 'is-invalid'  : '' ; ?>" value="<?php echo $data['state']; ?>" placeholder="Please Enter State">
                                                                <span class="invalid-feedback"><?php echo $data['state_err']; ?></span>
                                                                </div>
                                                                <div class="form-group">
                                                                   <input name="city" type="text" class="form-control <?php echo (!empty($data['city_err'])) ? 'is-invalid'  : '' ; ?>" value="<?php echo $data['city']; ?>" placeholder="Please Enter City">
                                                                   <span class="invalid-feedback"><?php echo $data['city_err']; ?></span>
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
        </div>






<?php require APPROOT. '/views/inc/footer.php'; ?>