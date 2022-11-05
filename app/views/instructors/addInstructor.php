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
                                <li class="active"><a href="#description">Basic Information</a></li>
                               
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div id="dropzone1" class="pro-ad">
                                                    <form action="<?php echo URLROOT; ?>/instructors/addInstructor" class="dropzone dropzone-custom needsclick add-professors" id="demo1-upload" method="POST" enctype ="multipart/form-data">
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="form-group">
                                                                    <input name="firstname" type="text" class="form-control <?php echo (!empty($data['firstname_err'])) ? 'is-invalid' : '' ; ?>" value="<?php echo $data['firstname']; ?>" placeholder="First Name">
                                                                    <span class="invalid-feedback"><?php echo $data['firstname_err']; ?></span>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="surname" type="text" class="form-control <?php echo (!empty($data['surname_err'])) ? 'is-invalid'  : '' ; ?>" value="<?php echo $data['surname']; ?>" placeholder="Sur-Name">
                                                                    <span class="invalid-feedback"><?php echo $data['surname_err']; ?></span>
                                                                </div>

                                                                <div class="form-group">
                                                                    <input name="email" type="text" class="form-control <?php echo (!empty($data['email_err'])) ? 'is-invalid'  : '' ; ?>"  value="<?php echo $data['email']; ?>" placeholder="Email">
                                                                    <span class="invalid-feedback"><?php echo $data['email_err']; ?></span>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="mobile" type="number" class="form-control <?php echo (!empty($data['mobile_err'])) ? 'is-invalid'  : '' ; ?>" value="<?php echo $data['mobile']; ?>" placeholder="Mobile no.">
                                                                    <span class="invalid-feedback"><?php echo $data['mobile_err']; ?></span>
                                                                </div>

                                                                <div class="form-group">
                                                                    <input name="dob" id="finish" type="date" class="form-control <?php echo (!empty($data['dob_err'])) ? 'is-invalid'  : '' ; ?>" value="<?php echo $data['dob']; ?>" placeholder="Date of Birth">
                                                                    <span class="invalid-feedback"><?php echo $data['dob_err']; ?></span>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="post_code" id="postcode" type="text" class="form-control <?php echo (!empty($data['post_code_err'])) ? 'is-invalid'  : '' ; ?>" value="<?php echo $data['post_code']; ?>" placeholder="Postcode">
                                                                    <span class="invalid-feedback"><?php echo $data['post_code_err']; ?></span>
                                                                </div>

                                                                <div class="form-group">
                                                                    <input name="address" type="text" class="form-control <?php echo (!empty($data['address_err'])) ? 'is-invalid'  : '' ; ?>" value="<?php echo $data['address']; ?>" placeholder="Address">
                                                                    <span class="invalid-feedback"><?php echo $data['address_err']; ?></span>
                                                                </div>
    
                                                                <div class="form-group alert-up-pd">
                                                                    
                                                                
                                                                       
                                                                        <input name="image" class="form-control" type="file" />
                                                                        
                                                                 
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="department" type="text" class="form-control <?php echo (!empty($data['department_err'])) ? 'is-invalid'  : '' ; ?>" value="<?php echo $data['department']; ?>" placeholder="IT Department">
                                                                    <span class="invalid-feedback"><?php echo $data['department_err']; ?></span>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="specialization" type="text" class="form-control <?php echo (!empty($data['specialization_err'])) ? 'is-invalid'  : '' ; ?>" value="<?php echo $data['specialization']; ?>" placeholder="Specialization">
                                                                    <span class="invalid-feedback"><?php echo $data['specialization_err']; ?></span>
                                                                </div>
                                                                <div class="form-group res-mg-t-15 <?php echo (!empty($data['description_err'])) ? 'is-invalid'  : '' ; ?>">
                                                                    <textarea name="description" placeholder="Description About Yourself">
                                                                     <?php echo $data['description']; ?>
                                                                    </textarea>
                                                                    <span class="invalid-feedback"><?php echo $data['description_err']; ?></span>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="form-group">
                                                                     <input name="gender" type="text" class="form-control <?php echo (!empty($data['gender_err'])) ? 'is-invalid' : '';?>" value="<?php echo $data['gender'];?>" placeholder="Enter Gender">
                                                                    <span class="invalid-feedback"><?php echo $data['gender_err']; ?></span>
                                                                </div>
                                                                <div class="form-group">
                                                                <input name="country" type="text" class="form-control <?php echo (!empty($data['country_err'])) ? 'is-invalid' : '';?>" value="<?php echo $data['country'];?>" placeholder="Enter Country">
                                                                        <span class="invalid-feedback"><?php echo $data['country_err']; ?></span>
                                                                </div>
                                                                <div class="form-group">
                                                                <input name="state" type="text" class="form-control <?php echo (!empty($data['state_err'])) ? 'is-invalid' : '';?>" value="<?php echo $data['state'];?>" placeholder="Enter State">
                                                                        <span class="invalid-feedback"><?php echo $data['state_err']; ?></span>
                                                                </div>
                                                                <div class="form-group">
                                                                <input name="city" type="text" class="form-control <?php echo (!empty($data['city_err'])) ? 'is-invalid' : '';?>" value="<?php echo $data['city'];?>" placeholder="Enter City">
                                                                        <span class="invalid-feedback"><?php echo $data['city_err']; ?></span>
                                                                </div>

                                                                <div class="form-group">
                                                                    <input name="website_url" type="text" class="form-control <?php echo (!empty($data['website_url_err'])) ? 'is-invalid'  : '' ; ?>" value="<?php echo $data['website_url']; ?>" placeholder="Website URL">
                                                                    <span class="invalid-feedback"><?php echo $data['website_url_err']; ?></span>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="password" type="password" class="form-control <?php echo (!empty($data['password_err'])) ? 'is-invalid'  : '' ; ?>" placeholder="Instructors Password">
                                                                    <span class="invalid-feedback"><?php echo $data['password_err']; ?></span>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="facebook_url" type="text" class="form-control <?php echo (!empty($data['facebook_url_err'])) ? 'is-invalid'  : '' ; ?>" value="<?php echo $data['facebook_url']; ?>" placeholder="Facebook URL">
                                                                    <span class="invalid-feedback"><?php echo $data['facebook_url_err']; ?></span>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="twitter_url" type="text" class="form-control <?php echo (!empty($data['twitter_url_err'])) ? 'is-invalid'  : '' ; ?>" value="<?php echo $data['twitter_url']; ?>" placeholder="twitter URL">
                                                                    <span class="invalid-feedback"><?php echo $data['twitter_url_err']; ?></span>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="linkedin_url" type="text" class="form-control <?php echo (!empty($data['linked_url_err'])) ? 'is-invalid'  : '' ; ?>" value="<?php echo $data['linkedin_url']; ?>" placeholder="Linkedin URL">
                                                                    <span class="invalid-feedback"><?php echo $data['linkedin_url_err']; ?></span>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="github_url" type="text" class="form-control <?php echo (!empty($data['github_url_err'])) ? 'is-invalid'  : '' ; ?>" value="<?php echo $data['github_url']; ?>" placeholder="Github URL">
                                                                    <span class="invalid-feedback"><?php echo $data['github_url_err']; ?></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="payment-adress">
                                                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Save Information</button>
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

<!-- Require the footer file -->
<?php require APPROOT. '/views/inc/footer.php'; ?>


