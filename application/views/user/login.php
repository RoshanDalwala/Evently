<!doctype html>
<html lang="en">
<head>

<!-- Basic Page Needs
================================================== -->
<title>Evently</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
<link rel="stylesheet" href="<?=base_url("resources/user/css/style.css")?>">
<link rel="stylesheet" href="<?=base_url("resources/user/css/colors/blue.css")?>">

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
				<h2 style="margin-right:100px ;">LogIn</h2>

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
					<span>Don't have an account? <a href="<?=site_url('user/UserC/loadSignup')?>">Sign Up!</a></span>
					<span>Or Login as Event Manager? <a href="<?=site_url('manager/Managerc/')?>">Login!</a></span>

				</div>
					
				<!-- Form -->
				<form method="post" action="<?=site_url('user/UserC/login')?>">
					<div class="input-with-icon-left">User Name
						
						<input type="text" class="input-text with-border" name="txtUname" id="username" placeholder="User Name" required/>
					</div>

					<div class="input-with-icon-left">Password
						<input type="password" class="input-text with-border" name="txtPwd" id="password" placeholder="Password" required/>
					</div>

					<div class="">
						<?php
							if(isset($msg))
                            echo $msg;
						?>
					</div>
				
				
				<!-- Button -->
				
					<button class="button full-width button-sliding-icon ripple-effect margin-top-10" type="submit" >Log In <i class="icon-material-outline-arrow-right-alt"></i></button>
				
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
<script src="<?=base_url('js/jquery-3.4.1.min.js')?>"></script>
<script src="<?=base_url('js/jquery-migrate-3.1.0.min.html')?>"></script>
<script src="<?=base_url('js/mmenu.min.js')?>"></script>
<script src="<?=base_url('js/tippy.all.min.js')?>"></script>
<script src="<?=base_url('js/simplebar.min.js')?>"></script>
<script src="<?=base_url('js/bootstrap-slider.min.js')?>"></script>
<script src="<?=base_url('js/bootstrap-select.min.js')?>"></script>
<script src="<?=base_url('js/snackbar.js')?>"></script>
<script src="<?=base_url('js/clipboard.min.js')?>"></script>
<script src="<?=base_url('js/counterup.min.js')?>"></script>
<script src="<?=base_url('js/magnific-popup.min.js')?>"></script>
<script src="<?=base_url('js/slick.min.js')?>"></script>
<script src="<?=base_url('js/custom.js')?>"></script>

<!-- Snackbar // documentation: https://www.polonel.com/snackbar/ -->
<script>
// Snackbar for user status switcher
$('#snackbar-user-status label').click(function() { 
	Snackbar.show({
		text: 'Your status has been changed!',
		pos: 'bottom-center',
		showAction: false,
		actionText: "Dismiss",
		duration: 3000,
		textColor: '#fff',
		backgroundColor: '#383838'
	}); 
}); 
</script>

</body>
</html>