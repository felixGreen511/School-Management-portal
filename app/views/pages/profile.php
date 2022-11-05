 <!-- Require the second navbar -->
 <?php require APPROOT. '/views/inc/header.php'; ?>

 <?php require APPROOT. '/views/inc/sidebar.php'; ?>

<div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.php"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <!-- Require the second navbar -->
                          <?php require APPROOT. '/views/inc/second-navbar.php'; ?>
                             <!-- Require the second navbar -->
                             
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <!-- Mobile Menu start -->
        <?php require APPROOT. '/views/inc/mobile-sidebar.php'; ?>

        
        <!-- Single pro tab review Start-->
       <div style="margin-bottom: 100px"></div>
        <div class="single-pro-review-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6 col-md-4 col-sm-4 col-xs-12">
                        <div class="profile-info-inner">
                            <div class="profile-img">
                                <img src="<?php echo URLROOT; ?>/img/profile/4.jpg" alt="" />
                            </div>
                            </div>
                    </div>
                            <div class="profile-infor-inner">
                                <div class="row">
                                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                        <div class="address-hr">
                                            <p><b>Name</b><br /> <?php echo $data['admin']->names; ?></p>
                                        </div>
                                        <div class="address-hr">
                                            <p><b>Email ID</b><br /> <?php echo $data['admin']->email;?></p>
                                        </div>
                                        <div class="address-hr">
                                            <a href="<?php echo URLROOT; ?>/settings/logout" class="btn btn-primary text-white">Logout</a>
                                        </div>
                                    </div>
                                    
                            </div>   
                    </div>
                </div>
            </div>
        </div>
        <!-- Require the second navbar -->
        <?php require APPROOT. '/views/inc/footer.php'; ?>
    