<main class="bg_gray">
		
	<div class="container margin_30">
		<div class="page_header">
			<div class="breadcrumbs">
				<ul>
					<li><a href="#">Home</a></li>
					<li><a href="#">Category</a></li>
					<li>Page active</li>
				</ul>
		</div>
		<h1>Sign In or Create an Account</h1>
	</div>
	<!-- /page_header -->
			<div class="row justify-content-center ">
				<div class="col-xl-6 col-lg-6 col-md-8">
					<div class="box_account mt-4 pt-3">
						
						<div class="form_container ">
							
							<form action="index.php?act=account" onsubmit="return sendDangnhap()" method="post">
								<div class="form-group">
									<input type="email" value="<?= !empty($email) ? $email : "" ?>" class="form-control emailLogin" name="emailLogin" id="email" placeholder="Email*">
								</div>
								<div class="err__login">
									<div class="email__errLogin"></div>
								</div>
								<div class="form-group">
									<input type="password" value="<?= !empty($password) ? $password : "" ?>" class="form-control passwordLogin" name="passwordLogin" id="password_in" value="" placeholder="Password*">
								</div>
								<div class="err__login">
									<div class="pass__errLogin"></div>
								</div>
								<div class="err__login">
									<span><?= isset($err) ? $err : "" ?></span>
								</div>
								<div class="clearfix add_bottom_15">
									<div class="checkboxes float-start">
										<label class="container_check">Remember me
											<input type="checkbox">
											<span class="checkmark"></span>
										</label>
									</div>
									<div class="float-end"><a id="forgot" href="javascript:void(0);">Lost Password?</a></div>
								</div>
								<div class="text-center"><input type="submit" name="login" value="Log In" class="btn_1 full-width "></div>
								<div id="forgot_pw">
									<div class="form-group">
										<input type="email" class="form-control" name="email_forgot" id="email_forgot" placeholder="Type your email">
									</div>
									<p>A new password will be sent shortly.</p>
									<div class="text-center"><input type="submit" value="Reset Password" class="btn_1"></div>
								</div>
							</form>
						</div>
						<!-- /form_container -->
					</div>
					<!-- /box_account -->
					
					<!-- /row -->
				</div>
				<div class="col-xl-6 col-lg-6 col-md-8">
					<div class="box_account">
						<h3 class="new_client">New Client</h3> <small class="float-right pt-2">* Required Fields</small>
						<form action="index.php?act=account" onsubmit="return sendDangky()" method="post">
							<div class="form_container">
								<div class="form-group">
									<input type="email" class="form-control email" name="email" id="email_2" placeholder="Email*">
								</div>
								<div class="err__login">
									<div class="email__err"></div>
								</div>
								<div class="form-group">
									<input type="password" class="form-control password" name="password" id="password_in_2" value="" placeholder="Password*">
								</div>
								<div class="err__login">
									<div class="pass__err"></div>
								</div>
								<hr>
								<div class="private box">
									<div class="row no-gutters">
										<div class="col-6 pr-1">
											<div class="form-group">
												<input type="text" class="form-control name" name="name" placeholder="Name*">
											</div>
											<div class="err__login">
												<div class="name__err"></div>
											</div>
										</div>
										<div class="col-12">
											<div class="form-group">
												<input type="text" class="form-control address" name="address" placeholder="Full Address*">
											</div>
											<div class="err__login">
												<div class="address__err"></div>
											</div>
										</div>
									</div>
									<!-- /row -->
									
									<div class="row no-gutters">
										<div class="col-6 pl-1">
											<div class="form-group">
												<input type="text" class="form-control phone" name="phone" placeholder="Telephone *">
											</div>
											<div class="err__login">
												<div class="phone__err"></div>
											</div>
										</div>
									</div>
									<!-- /row -->
									
								</div>
								<!-- /private -->
								<!-- /company -->
								<hr>
								<div class="form-group">
									<label class="container_check">Accept <a href="#0">Terms and conditions</a>
										<input type="checkbox">
										<span class="checkmark"></span>
									</label>
								</div>
								<div class="text-center"><input type="submit" value="Register" name="signup" class="btn_1 full-width"></div>
							</div>
						</form>
						<!-- /form_container -->
					</div>
				<!-- /box_account -->
			</div>
		</div>
		<!-- /row -->
		</div>
		<!-- /container -->
	</main>

