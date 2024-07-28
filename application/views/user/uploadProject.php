<!doctype html>
<html lang="en">
    <head>
        <!-- Basic Page Needs
         ================================================== -->
      <title>Evently</title>
      <?php include_once("top-script.php") ?>
    </head>
   	<body>
      <!-- Wrapper -->
      	<div id="wrapper">
        <!-- Header Container
            ================================================== -->
	        <?php include_once("header.php") ?>

	        <div class="clearfix"></div>
	       
	         <!-- Category Boxes -->
			<form method="post" enctype="multipart/form-data" action="<?=site_url('User/ProjectC/loadProjectDetails')?>">
		        
		        <div class="section margin-top-65">
		            
		            <div class="container">
		            	
		            	<div class="row">
		                    
		                    <!-- Dashboard Box -->
							
							<div class="col-xl-12">
								
								<div>
					                <button class="btn btn-primary">
					                    <a href="<?=site_url('user/ProjectC/loadProject')?>">Show All Project</a>
					                </button>
					            </div>

								<div class="dashboard-box margin-top-0">
									<!-- Headline -->

									<div class="headline">
										<h3><i class="icon-feather-folder-plus"></i> Project Submission Form</h3>
									</div>

									<div class="content with-padding padding-bottom-10">
										<div class="row">
											<div class="col-xl-4">
												<div class="submit-field">
													<h5>Project Title</h5>
													<input type="text" name="txtTitle" class="with-border">
												</div>
											</div>

											<div class="col-xl-4">
												<div class="submit-field">
													<h5>Project Category</h5>
														<select name="txtProjectCategory" data-size="7">
														<?php
															foreach($cat as $c)
															{
														?>
															<option value="<?=$c->CategoryID ?>"><?=$c->CategoryName?></option>
														<?php
															}
														?>
														</select>
												</div>
											</div>

											<div class="col-xl-4">
												<div class="submit-field">
													<h5>City</h5>
													<select name="txtCity" class="input-text with-border">
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
											</div>

											<!-- <div class="col-xl-4">
												<div class="submit-field">
													<h5>User Name</h5>
													<?php
														foreach ($profilePic as $u) 
														{
													?>
													<input type="text" name="txtUser" class="with-border" value="<?=$u->UserID?>"><?=$u->UserName?>
													<?php
														}
													?>
												</div>
											</div> -->

											<div class="col-xl-4">
												<div class="submit-field">
													<h5>Budget</h5>
													<div class="row">
														<div class="col-xl-6">
															<div class="input-with-icon">
																<input class="with-border" name="txtBudget" type="text" placeholder="Price">
																<i class="currency">INR</i>
															</div>
														</div>
													</div>
												</div>
											</div>
												
											<div class="col-xl-8">
												<div class="submit-field">
													<h5>Project Description</h5>
													<textarea cols="30" rows="5" name="txtDescription" class="with-border"></textarea>
												</div>
											
												<div class="uploadButton margin-top-30"> 
													<input name="fup" class="uploadButton-input" type="file" accept="image/*, application/pdf" id="upload" multiple/>
													<label class="uploadButton-button ripple-effect" for="upload">Upload Files</label>
													<span class="uploadButton-file-name">Images or documents that might be helpful in describing your Project</span>
												</div>
											
											</div>
									
										</div>

									</div>
								
								</div>
							
							</div>

						</div>

						<div class="col-xl-12">
							<button class="button ripple-effect big margin-top-30">Post a Project</button>
						</div>

		            </div>
		    	</div>

	        </form>
	        <!-- Category Boxes / End -->
	         
	        <?php include_once("footer.php") ?>
      	</div>
      <!-- Wrapper / End -->
      <?php include_once("bottom-script.php") ?>
   </body>
</html>