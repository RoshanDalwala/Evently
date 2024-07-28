<!doctype html>
<html lang="en">
<head>

<!-- Basic Page Needs
================================================== -->
<title>Evently</title>
<?php include_once("topScript.php") ?>


</head>
<body>

<!-- Wrapper -->
<div id="wrapper">

<!-- Header Container
================================================== -->

<div class="clearfix"></div>
<!-- Header Container / End -->

<!-- Titlebar
================================================== -->
<div id="titlebar" class="gradient" style="text-align:center ;">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<a href="./index.php">
	                <img class="img-fluid" style="height:150px ; margin-right:100px; margin-top: 1px;" src="<?=base_url('resources/user/')?>/images/newlogo.png" alt="Theme-Logo" />
	            </a>
				<h2 style="margin-right:100px ;">Sign Up Your Self</h2>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs" class="">
					
				</nav>

			</div>
		</div>
	</div>
</div>

 
<!-- Page Content
================================================== -->
<div class="container">
	<div class="row">
		<div class="col-xl-5 offset-xl-3">


			<div class="login-register-page">
				<!-- Welcome Text -->
				<div class="welcome-text">
					<h3>We're glad to see you again!</h3>
					<span>Already have an account?<a href="<?=site_url('manager/ManagerC/login')?>">Log In!</a></span>
				</div>
					
				<!-- Form -->
				<form method="post" enctype="multipart/form-data" action="<?=site_url('manager/ManagerC/insertSignup')?>"> 
					<div class="input-with-icon-left">User Name
						<input type="text" class="input-text with-border" name="txtUname" id="username" placeholder="User Name" required/>
					</div>

					<div class="input-with-icon-left">Password
						<input type="password" class="input-text with-border" name="txtPwd" id="password" placeholder="Password" required/>
					</div>

                    <div class="input-with-icon-left">Email ID
						<input type="text" class="input-text with-border" name="txtEmail" id="email" placeholder="eg. xxxxxx@gmail.com" required/>
					</div>

                    <div class="input-with-icon-left">Contact Number
						<input type="text" class="input-text with-border" name="txtContact" id="contact" placeholder="xxxxxxxxxx" required/>
					</div>

                    <div class="input-with-icon-left">Profile Pic
						<input type="file" class="input-text with-border" name="fup" id="profilepic" placeholder="Profile Pic" required/>
					</div>


					<div class="input-with-icon-left">
						City
						<select name="city" class="input-text with-border">
						<?php
						foreach ($cities as $ct) 
						{
						?>
							<option value="<?=$ct->CityID?>"><?=$ct->CityName?></option>
						<?php
						}
						?>
						</select>
					</div>


					<div class="">
						<?php
							if(isset($msg))
							{
								echo $msg;
							}
						?>
					</div>
				
				
				<!-- Button -->        
                    <button class="button full-width button-sliding-icon ripple-effect margin-top-10" type="submit">Sign In <i class="icon-material-outline-arrow-right-alt"></i></button>
                </form>
			</div>

		</div>
	</div>
</div>


<!-- Spacer -->
<div class="margin-top-70"></div>
<!-- Spacer / End-->

<?php include_once("footer.php") ?>
</div>
<!-- Wrapper / End -->

<!-- Scripts
================================================== -->
<?php include_once("bottomScript.php") ?>

</body>
</html> 