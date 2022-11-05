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

            <div class="courses-area">
            <div class="container-fluid">
               
                <div class="row">
                <?php foreach($data['courses'] as $course): ?>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="courses-inner res-mg-b-30">
                            <div class="courses-title">
                                <a href="#"><img src="img/courses/1.jpg" alt=""></a>
                                <h2><?php echo $course->course_name; ?></h2>
                            </div>
                            <div class="courses-alaltic">
                                <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-clock"></i></span> 1 Year</span>
                                <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-heart"></i></span> 50</span>
                                <span class="cr-ic-r"><span class="course-icon"><i class="fa fa-dollar"></i></span> <?php echo $course->course_price; ?></span>
                            </div>
                            <div class="course-des">
                                <p><span><i class="fa fa-clock"></i></span> <b>Duration:</b> <?php echo $course->course_duration; ?></p>
                                <p><span><i class="fa fa-clock"></i></span> <b>Director:</b> <?php echo $course->instructor; ?></p>
                                <p><span><i class="fa fa-clock"></i></span> <b>Students:</b> <?php echo $course->number_students; ?></p>
                            </div>
                            <div class="product-buttons">
                                <a href="<?php echo URLROOT; ?>/courses/showCourse/<?php echo $course->id; ?>" class="btn btn-outline-primary">Read More</a>
                            </div>
                        </div>
                    </div>

                  <?php endforeach; ?>
                </div>
                

                
            </div>
        </div>

            <?php require APPROOT. '/views/inc/footer.php'; ?>