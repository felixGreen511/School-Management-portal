<!-- require the header file -->
<?php require APPROOT .'/views/inc/header.php';?>



<div class="error-pagewrap">
		<div class="error-page-int">
			<div class="text-center custom-login">
				<h3>Registration</h3>
				<p>This is the best app ever!</p>
			</div>
			<div class="content-error">
				<div class="hpanel">
                    <div class="panel-body">
                        <form action="<?php echo URLROOT; ?>/settings/register" method="POST">
                            <div class="row">
                                <div class="form-group col-lg-12">
                                    <label>Names</label>
                                    <input name="names" class="form-control <?php echo (!empty($data['names_err'])) ? 'is-invalid' : '';?>" value="<?php echo $data['names'];?>">
                                    <span class="invalid-feedback"><?php echo $data['names_err']; ?></span>
                                </div>
                                <div class="form-group col-lg-12">
                                    <label>Email Address</label>
                                    <input name="email" class="form-control <?php echo (!empty($data['email_err'])) ? 'is-invalid' : '';?>" value="<?php echo $data['email'];?>">
                                    <span class="invalid-feedback"><?php echo $data['email_err']; ?></span>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Password</label>
                                    <input name="password" type="password" class="form-control <?php echo (!empty($data['password_err'])) ? 'is-invalid' : '';?>" value="<?php echo $data['password'];?>">
                                    <span class="invalid-feedback"><?php echo $data['password_err']; ?></span>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Repeat Password</label>
                                    <input name="confirm_password" type="password" class="form-control <?php echo (!empty($data['confirm_password_err'])) ? 'is-invalid' : '';?>" value="<?php echo $data['confirm_password'];?>">
                                    <span class="invalid-feedback"><?php echo $data['confirm_password_err']; ?></span>
                                </div>
                                
                                <div class="checkbox col-lg-12">
                                    <input name="checked" type="checkbox" class="i-checks" checked> Sigh up for our newsletter
                                </div>
                            </div>
                            <div class="text-center">
                                <input type="submit" class="btn btn-primary btn-block loginbtn" value="Register"> Already Registered
                                <a class="btn btn-default btn-block" href="<?php echo URLROOT; ?>/settings/login">Login</a>
                                
                            </div>
                        </form>
                    </div>
                </div>
			</div>
<?php require APPROOT .'/views/inc/footer.php'?>