<header id="header-container" class="fullwidth">

	<!-- Header -->
	<div id="header">
		<div class="container">
			
			<!-- Left Side Content -->
			<div class="left-side">
				
				<!-- Logo -->
				<div id="logo">
					<a href="index.html"><img src="<?=base_url('resources/user/images/newlogo.png')?>" style="width:90px; height: 80px;" alt=""></a>
				</div>

				<!-- Main Navigation -->
				<nav id="navigation">
					<ul id="responsive">
						<li>
							<a href="<?=site_url("user/HomeC")?>">Home</a>
						</li>

						<?php
						if($_SESSION['utype']=="user")
						{
						?>
						<li>
							<a href="<?=site_url("user/projectC/loadAddProject")?>">Add Project</a>
						</li>
						<li>
							<a href="<?=site_url("user/projectC/loadProject")?>">My Projects</a>
						</li>
						
						<?php
						}
						else
						{
						?>
						<li>
							<a href="<?=site_url("user/projectC/loadProject")?>">Explore Projects</a>
						</li>
						<li>
							<a href="<?=site_url("user/projectC/myBids")?>">My Bids</a>
						</li>
						<li>
							<a href="<?=site_url("user/projectC/myProjects")?>">My Projects</a>
						</li>

						<li>
							<a href="<?=site_url("user/userc/managerProfile/".$_SESSION['uid'])?>">My Profile</a>
						</li>
						<?php
						}
						?>

						<?php
							if(isset($_SESSION['uid']))
							{
						?>
							<li style=""><a href="<?=site_url('user/UserC/Logout')?>">Logout</a></li>
						<?php
							}
						?>
					</ul>

					
				</nav>

				<div style="text-align: right;">
						
					</div>
				<div class="clearfix"></div>
				<!-- Main Navigation / End -->
				
			</div>
			<!-- Left Side Content / End -->


			<!-- Right Side Content / End -->
			<div class="right-side">
				<!-- Mobile Navigation Button -->
				<span class="mmenu-trigger">
					<button class="hamburger hamburger--collapse" type="button">
						<span class="hamburger-box">
							<span class="hamburger-inner"></span>
						</span>
					</button>
				</span>

			</div>
			<!-- Right Side Content / End -->

		</div>
	</div>
	<!-- Header / End -->

</header>
