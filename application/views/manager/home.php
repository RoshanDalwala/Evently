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
        <?php include_once("header.php") ?>

        <div class="clearfix"></div>
       
         <!-- Category Boxes -->
        
<div class="intro-banner" style="background-image:url(<?=base_url('resources/shared/')?>images/home1.jpg);" alt="">
    <div class="container">
        
        <!-- Intro Headline -->
        <div class="row">
            <div class="col-md-12">
                <div class="banner-headline">
                    <h3>
                        <strong>Hire experts or be hired for any event, any time.</strong>
                        <br>
                        <span>Thousands of small businesses use <strong class="color">Evently</strong> to turn their ideas into reality.</span>
                    </h3>
                </div>
            </div>
        </div>
        
        <!-- Search Bar -->
      
        <!-- Stats -->
        <div class="row">
            <div class="col-md-12">
                <ul class="intro-stats margin-top-45 hide-under-992px">
                    <li>
                        <strong class="counter"><?=count($projects)?></strong>
                        <span>Events Posted</span>
                    </li>
                    <li>
                        <strong class="counter"><?=count($managers)?></strong>
                        <span>Total Event Managers</span>
                    </li>
                    <li>
                        <strong class="counter"><?=count($users)?></strong>
                        <span>Total Users</span>
                    </li>
                </ul>
            </div>
        </div>

    </div>
</div>


<!-- Content
================================================== -->
<!-- Category Boxes -->
<div class="section margin-top-65">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">

                <div class="section-headline centered margin-bottom-15">
                    <h3>Popular Project Categories</h3>
                </div>

                <!-- Category Boxes Container -->
                <div class="categories-container">
                    <?php 
                        for($i=0;$i<4;$i++)
                        {
                    ?>
                    <!-- Category Box -->
                    <a href="<?=site_url('User/ProjectC/disProjectDetails/'.$projects[$i]->ProjectID)?>" class="category-box">
                        <div class="category-box-icon">
                            <img style="width: 150px;" src="<?=base_url('resources/shared/')?>images/<?= $projects[$i]->Image?>"></img>
                        </div>
                        <!-- <div class="category-box-counter"><?= $projects[$i]->ProjectID?></div> -->
                        <div class="category-box-content">
                            <h3><?= $projects[$i]->CategoryName?></h3>
                            <p><?= $projects[$i]->Title?></p>
                        </div>
                    </a>
                    <?php
                        }
                    ?>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- Category Boxes / End -->


<!-- Features Jobs -->
<div class="section gray margin-top-45 padding-top-65 padding-bottom-75">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                
                <!-- Section Headline -->
                <div class="section-headline margin-top-0 margin-bottom-35">
                    <h3>Featured Projects</h3>
                    <a href="<?=site_url('user/ProjectC/loadProject')?>" class="headline-link">Browse All Project</a>
                </div>
                
                <!-- Jobs Container -->
                <div class="listings-container compact-list-layout margin-top-35">
                    <?php 
                        for($i=0;$i<5;$i++)
                        {
                    ?>
                    <!-- Job Listing -->
                    <a href="<?=site_url('User/ProjectC/disProjectDetails/'.$projects[$i]->ProjectID)?>" class="job-listing with-apply-button">

                        <!-- Job Listing Details -->
                        <div class="job-listing-details">

                            <!-- Logo -->
                            <div class="job-listing-company-logo">
                                <img src="<?=base_url('resources/shared/')?>images/<?= $projects[$i]->Image?>" alt="">
                            </div>

                            <!-- Details -->
                            <div class="job-listing-description">
                                <h3 class="job-listing-title"><?= $projects[$i]->Title?></h3>

                                <!-- Job Listing Footer -->
                                <div class="job-listing-footer">
                                    <ul>
                                        <li><i class="icon-material-outline-business"></i> <?= $projects[$i]->CategoryName?> <div class="verified-badge" title="Verified Employer" data-tippy-placement="top"></div></li>
                                        <li><i class="icon-material-outline-location-on"></i> <?= $projects[$i]->CityName?></li>
                                        <li><i class="icon-material-outline-business-center"></i></li>                                   
                                        <li><i class="icon-material-outline-location-on"></i> <?= $projects[$i]->UserName?></li>
                                        <li><i class="icon-material-outline-access-time"></i><?=$projects[$i]->AuctionDateTime?></li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Apply Button -->
                            <span class="list-apply-button ripple-effect">Apply Now</span>
                        </div>
                    </a>    
                    <?php
                        }
                    ?>
                </div>
                <!-- Jobs Container / End -->
            </div>
        </div>
    </div>
</div>
<!-- Featured Jobs / End -->



         <!-- Category Boxes / End -->
         
         <?php include_once("footer.php") ?>
      </div>
      <!-- Wrapper / End -->
      <?php include_once("bottomScript.php") ?>
   </body>
</html>