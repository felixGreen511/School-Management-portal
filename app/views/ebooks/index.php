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
                        <div class="product-status-wrap">
                            <h4>Library List</h4>
                            <div class="add-product">
                                <a href="<?php echo URLROOT; ?>/ebooks/addEbook">Add Library</a>
                            </div>
                            <div class="asset-inner">
                                <table>
                                    <tr>
                                        <th>No</th>
                                        <th>Image</th>
                                        <th>Ebook Name</th>
                                        <th>Status</th>
                                        <th>Subject</th>
                                        <th>Department</th>
                                        <th>Type</th>
                                        <th>Price</th>
                                        <th>Setting</th>
                                    </tr>
                                    <?php foreach($data['ebook'] as $ebook): ?>
                                    <tr>
                                        <td><?php echo $ebook->id; ?></td>
                                        <td><img src="img/product/book-1.jpg" alt="" /></td>
                                        <td><?php echo $ebook->ebook_name;?></td>
                                        <td>
                                            <button class="pd-setting"><?php echo $ebook->status;?></button>
                                        </td>
                                        <td><?php echo $ebook->subject; ?></td>
                                        <td><?php echo $ebook->department; ?></td>
                                        <td><?php echo $ebook->type; ?></td>
                                        <td><?php echo $ebook->price;?></td>
                                        <td>
                                        <div class="col-lg-6">
                                            <a href="<?php echo URLROOT; ?>/ebooks/editEbook/<?php echo $ebook->id; ?>" class="btn btn-info btn-sm">Edit Ebook</a>
                                            </div>
                                            <div class="col-lg-6">
                                            <form class="float-right" action="<?php echo URLROOT; ?>/ebooks/deleteEbook/<?php echo $ebook->id;?>" method="POST"> 
                                            <input type="submit" value="Delete Ebook" class="btn btn-danger btn-sm">
                                            </div>
                                        </td>
                                    </tr>
                                  <?php endforeach; ?>
                                 
                                 
                                   
                                    
                                </table>
                            </div>
                            <div class="custom-pagination">
								<ul class="pagination">
									<li class="page-item"><a class="page-link" href="#">Previous</a></li>
									<li class="page-item"><a class="page-link" href="#">1</a></li>
									<li class="page-item"><a class="page-link" href="#">2</a></li>
									<li class="page-item"><a class="page-link" href="#">3</a></li>
									<li class="page-item"><a class="page-link" href="#">Next</a></li>
								</ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


<?php require APPROOT. '/views/inc/footer.php'; ?>