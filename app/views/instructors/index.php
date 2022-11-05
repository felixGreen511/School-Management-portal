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
      <div class="contacts-area mg-b-15">
            <div class="container-fluid">

                <div class="row">
                    <?php foreach($data['instructor'] as $instructor): ?>

                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                        <div class="hpanel hblue contact-panel contact-panel-cs responsive-mg-b-30">
                            <div class="panel-body custom-panel-jw">
                                <div class="social-media-in">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                </div>
                                <img alt="logo" class="img-circle m-b" src="img/contact/1.jpg">
                                <h3><a href="<?php echo URLROOT; ?>/instructors/showProfile/<?php echo $instructor->id; ?>"><?php echo $instructor->firstname . ' '. $instructor->surname; ?></a></h3>
                                <p class="all-pro-ad"><?php echo $instructor->country; ?></p>
                                <p>
                                <?php echo $instructor->description; ?>
                                </p>
                            </div>
                            <div class="panel-footer contact-footer">
                                <div class="professor-stds-int">
                                    <div class="professor-stds">
                                        <div class="contact-stat"><span>Likes: </span> <strong>956</strong></div>
                                    </div>
                                    <div class="professor-stds">
                                        <div class="contact-stat"><span>Comments: </span> <strong>350</strong></div>
                                    </div>
                                    <div class="professor-stds">
                                        <div class="contact-stat"><span>Views: </span> <strong>450</strong></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php endforeach; ?>
                </div>
               
            </div>
        </div>
</div>
        <?php require APPROOT. '/views/inc/footer.php';?>