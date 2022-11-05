    
       <?php require APPROOT. '/views/inc/header.php'; ?>
    <!-- Start Left menu area -->
  <!-- require the sidebar file -->
      <?php require_once APPROOT . '/views/inc/sidebar.php';?>
    <!-- End Left menu area -->
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="<?php echo URLROOT; ?>"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
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
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
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
            >
        </div>
        <div class="blog-details-area mg-b-15">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="blog-details-inner">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="latest-blog-single blog-single-full-view">
                                        <div class="blog-image">
                                            <a href="#"><img src="<?php echo URLROOT; ?>/img/blog-details/1.jpg" alt="" />
												</a>
                                            <div class="blog-date">
                                                <p><span class="blog-day">20</span> May</p>
                                            </div>
                                        </div>
                                        <div class="blog-details blog-sig-details">
                                            <div class="details-blog-dt blog-sig-details-dt courses-info mobile-sm-d-n">
                                                <span><a href="#"><i class="fa fa-user"></i> <b>Course Name:</b> <?php echo $data['courses']->course_name;?></a></span>
                                                <span><a href="#"><i class="fa fa-heart"></i> <b>Course Price:</b> $ <?php echo $data['courses']->course_price;?></a></span>
                                                <span><a href="#"><i class="fa fa-comments-o"></i> <b>Instructor Name:</b> <?php echo $data['courses']->instructor;?></a></span>
                                            </div>
                                            <h1><a class="blog-ht" href="#">Courses Information</a></h1>
                                            
                                            <p>
                                                <?php echo $data['courses']->description;?>
                                            </p>
                                            <div class="col-lg-6">
                                            <a href="<?php echo URLROOT; ?>/courses/editCourse/<?php echo $data['courses']->id; ?>" class="btn btn-info">Edit Course</a>
                                            </div>
                                            <div class="col-lg-6">
                                            <form class="float-right" action="<?php echo URLROOT; ?>/courses/deleteCourse/<?php echo $data['courses']->id;?>" method="POST"> 
                                            <input type="submit" value="Delete Course" class="btn btn-danger">
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
    </div>