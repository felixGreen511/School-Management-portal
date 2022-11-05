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
 <!-- Single pro tab review Start-->
 <div class="single-pro-review-area mt-t-30 mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-payment-inner-st">
                            <ul id="myTabedu1" class="tab-review-design">
                                <center>
                                <li class="active"><a href="#description">Update Course Details</a></li>
                                </center>
                                
                                
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div id="dropzone1" class="pro-ad addcoursepro">
                                                    <form action="<?php echo URLROOT; ?>/courses/editCourse/<?php echo $data['id']; ?>" method="POST" enctype="multipart/form-data">
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="form-group">
                                                                    <input name="course_name" type="text" class="form-control <?php echo (!empty($data['course_name_err'])) ? 'is-invalid' : '';?>" value="<?php echo $data['course_name'];?>" placeholder="Course Name">
                                                                </div>
                                                                
                                                                <div class="form-group">
                                                                    <input name="course_duration" type="text" class="form-control <?php echo (!empty($data['course_duration_err'])) ? 'is-invalid' : '';?>" value="<?php echo $data['course_duration'];?>" placeholder="Course Duration">
                                                                    
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="number_students" type="number" class="form-control <?php echo (!empty($data['number_students_err'])) ? 'is-invalid' : '';?>" value="<?php echo $data['number_students'];?>" placeholder="Students Number">
                                                                    
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="course_price" type="number" class="form-control <?php echo (!empty($data['course_price_err'])) ? 'is-invalid' : '';?>" value="<?php echo $data['course_price'];?>" placeholder="Course Price">
                                                                   
                                                                </div>
                                                                <div class="form-group alert-up-pd">
                                                                    <div class="form-group">
                                                                       
                                                                        <input name="image" class="form-control <?php echo (!empty($data['image_err'])) ? 'is-invalid' : '';?>" value="<?php echo $data['image'];?>" type="file" />
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="form-group res-mg-t-15">
                                                                    <input name="department" type="text" class="form-control <?php echo (!empty($data['department_err'])) ? 'is-invalid' : '';?>" value="<?php echo $data['department'];?>" placeholder="Department">
                                                                   
                                                                </div>
                                                                <div class="form-group">
                                                                    <textarea name="description" placeholder="Description" class="form-control <?php echo (!empty($data['description_err'])) ? 'is-invalid' : '';?>">
                                                                    <?php echo $data['description'];?>
                                                                    </textarea>
                                                                    
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="instructor" type="text" class="form-control <?php echo (!empty($data['instructor_err'])) ? 'is-invalid' : '';?>" value="<?php echo $data['instructor'];?>" placeholder="Instructor">
                                                                    
                                                                </div>
                                                               
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-12">
                                                                <div class="payment-adress">
                                                                    <button type="submit" class="btn btn-primary waves-effect waves-light">Update Course</button>
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