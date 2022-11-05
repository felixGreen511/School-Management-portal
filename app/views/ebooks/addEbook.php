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
                                <li class="active"><a href="#description">Library Assets</a></li>
                                </center>   
                            </ul>
                            <div id="myTabContent" class="tab-content custom-product-edit">
                                <div class="product-tab-list tab-pane fade active in" id="description">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div id="dropzone1" class="pro-ad addcoursepro">
                                                    <form action="<?php echo URLROOT; ?>/ebooks/addEbook" method="POST">
                                                        <div class="row">
                                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                                <div class="form-group">
                                                                    <input name="ebook_name" type="text" class="form-control <?php echo (!empty($data['ebook_name_err'])) ? 'is-invalid'  : '' ; ?>" value="<?php echo $data['ebook_name']; ?>" placeholder="Ebook Name">
                                                                    <span class="invalid-feedback"><?php echo $data['ebook_name_err']; ?></span>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="subject" type="text" class="form-control <?php echo (!empty($data['subject_err'])) ? 'is-invalid'  : '' ; ?>" value="<?php echo $data['subject']; ?>" placeholder="Subject">
                                                                    <span class="invalid-feedback"><?php echo $data['subject_err']; ?></span>
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
                                                                    <input name="type" type="text" class="form-control <?php echo (!empty($data['type_err'])) ? 'is-invalid'  : '' ; ?>" value="<?php echo $data['type']; ?>" placeholder="Type">
                                                                    <span class="invalid-feedback"><?php echo $data['type_err']; ?></span>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="price" type="text" class="form-control <?php echo (!empty($data['price_err'])) ? 'is-invalid'  : '' ; ?>" value="<?php echo $data['price']; ?>" placeholder="Price">
                                                                    <span class="invalid-feedback"><?php echo $data['price_err']; ?></span>
                                                                </div>
                                                                <div class="form-group">
                                                                    <input name="status" type="text" class="form-control <?php echo (!empty($data['status_err'])) ? 'is-invalid'  : '' ; ?>" value="<?php echo $data['status']; ?>" placeholder="Status">
                                                                    <span class="invalid-feedback"><?php echo $data['status_err']; ?></span>
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