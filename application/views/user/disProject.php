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
            <!-- Left Side Content -->
            <div class="left-side">
                
                <!-- Logo -->
                <div id="logo">
                    <a href="index.html"><img src="images/logo.png" alt=""></a>
                </div>

                <!-- Main Navigation -->
                <nav id="navigation">
                    <ul id="responsive">
                    </ul>
                </nav>
                <div class="clearfix"></div>
                <!-- Main Navigation / End -->
                
            </div>
            <!-- Left Side Content / End -->


        </div>
    </div>
    <!-- Header / End -->

</header>
<div class="clearfix"></div>
<!-- Header Container / End -->

<!-- Page Content
================================================== -->
<div class="full-page-container">
    <?php
        if($_SESSION['utype']=="manager")
        {
    ?>

    <div class="full-page-sidebar">
        <div class="full-page-sidebar-inner" data-simplebar>
            <div class="sidebar-container">
                <form method="post" action="<?=site_url('user/projectC/loadProject')?>">
                    
                <!-- Location -->
                <div class="sidebar-widget">
                    <h3>Location</h3>
                    <div class="input-with-icon">
                        <div id="autocomplete-container">
                           <select name="city">
                                <option value="-1"> Select City </option>
                                <?php
                                foreach($cities as $ct)
                                {
                                ?>
                                    <option value="<?=$ct->CityID?>"><?= $ct->CityName ?></option>
                               <?php
                                }
                                ?>
                           </select> 
                        </div>
                        <i class="icon-material-outline-location-on"></i>
                    </div>
                </div>


                 <div class="sidebar-widget">
                    <h3>Category</h3>
                    <div class="input-with-icon">
                        <div id="autocomplete-container">
                           <select name="cat">
                                <option value="-1"> Select Category </option>

                                <?php
                                foreach($cat as $ct)
                                {
                                ?>
                                    <option value="<?=$ct->CategoryID?>"><?= $ct->CategoryName ?></option>
                               <?php
                                }
                                ?>
                           </select> 
                        </div>
                    </div>
                </div>
                
                <!-- Keywords -->
                <div class="sidebar-widget">
                    <h3>Price Range</h3>
                    <div class="keywords-container">
                        <div class="keyword-input-container row">
                            <div class="col-md-6">
                                <input type="text" name="txtMin" class="keyword-input" placeholder="Min"/>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="txtMax" class="keyword-input" placeholder="Max"/>
                            </div>

                        </div>
                        <div class="keywords-list"><!-- keywords go here --></div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                
                <div class="sidebar-widget">
                    <div class="keywords-container">
                        <button class="button ripple-effect" name="btnSearchProject">Search</button>
                    </div>
                        <div class="clearfix"></div>
                </div>
                <!-- Category -->

                </form>
                                
            </div>
            <!-- Sidebar Container / End -->

           

        </div>
    </div>
    <?php
        }
    ?>
    <!-- Full Page Sidebar / End -->
    
    <!-- Full Page Content -->
    <div class="full-page-content-container" data-simplebar>
        <div class="full-page-content-inner">
            <?php 
            if($_SESSION['utype']=="user")
            {
            ?>
            <h3 class="page-title">My Projects</h3>
            <?php
            }
            else
            {
            ?>
            <h3 class="page-title">Seach Projects</h3>

            <?php
            }
            ?>

            <div class="notify-box margin-top-15">
            </div>

            <div class="listings-container grid-layout margin-top-35">
                <?php
                    foreach($projectData as $p)
                    {
                ?>
                
                <!-- Job Listing -->
                <a href="<?=site_url('User/ProjectC/disProjectDetails/'.$p->ProjectID)?>" class="job-listing">

                    <!-- Job Listing Details -->
                    <div class="job-listing-details">
                        <!-- Logo -->
                        <div class="">
                            <img style="border-radius: 100%; height: 90px; width: 90px;margin-right: 10px;margin-right: 10px;" src="<?=base_url("resources/shared/images/")?><?=$p->Image?>">
                        </div>

                        <!-- Details -->
                        <div class="job-listing-description">
                            <h4 class="job-listing-company"><?=$p->UserName?><span class="verified-badge" title="Verified Employer" data-tippy-placement="top"></span></h4>
                            <h3 class="job-listing-title"><?=$p->Title?></h3>
                        </div>
                    </div>

                    <!-- Job Listing Footer -->
                    <div class="job-listing-footer">
                        <span class="bookmark-icon"></span>
                        <ul>
                            <li><i class="icon-material-outline-location-on"></i><?=$p->CityName?></li>
                            <li><i class="icon-material-outline-business-center"></i><?=$p->CategoryName?></li>
                            <li><i class="icon-material-outline-account-balance-wallet"></i><?=$p->Budget?></li>
                            <li><i class="icon-material-outline-access-time"></i></li>
                        </ul>
                    </div>
                </a>
                <?php   
                    }
                ?>
                
            </div>
            <!-- Footer / End -->
        </div>
    </div>
    <!-- Full Page Content / End -->

</div>

</div>
<!-- Wrapper / End -->

        <div class="section margin-top-65">
            <div class="container">

            </div>
         </div>
         <!-- Category Boxes / End -->
         
      </div>
      <!-- Wrapper / End -->
      <?php include_once("bottom-script.php") ?>
   </body>
</html>