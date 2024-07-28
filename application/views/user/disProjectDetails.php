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
        </div>
    </div>
    <!-- Header / End -->

</header>
<div class="clearfix"></div>
<!-- Header Container / End -->

<!-- Page Content
================================================== -->
<div id="titlebar" class="gradient">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Project</h2>
                <span>Project Post Page</span>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div>
        <button class="btn btn-primary">
            <a href="<?=site_url('user/ProjectC/loadProject')?>">Show All Project</a>
        </button>
    </div>
    <div class="row">
                
        <!-- Inner Content -->
        <div class=" col-xl-12">
            <!-- Blog Post -->

            <div class="blog-post single-post">
                <?php
                    foreach($projectData as $p)
                    {
                ?>
                <!-- Blog Post Thumbnail -->
                <div class="blog-post-thumbnail" align="center" style=" height: 800px;background-repeat: no-repeat; background-position: 100% 100%; background-size: cover; width: 100%;">
                    <div class="blog-post-thumbnail-inner">
                        <div>
                            <img style="width: 100%;" src="<?=base_url("resources/shared/images/")?><?=$p->Image?>">
                        </div>
                    </div>
                </div>

                <!-- Blog Post Content -->
                <div class="blog-post-content">
                    
                    <span>
                      
                        <img style="border-radius: 100%; height: 50px; width: 50px;margin-right: 10px;" src="<?=base_url("resources/shared/images/".$p->ProfilePic)?>">
                       
                        <h2 class="margin-bottom-10, margin-top-20" ><?=$p->UserName?><span>   </span><span class="verified-badge" title="Verified Employer" data-tippy-placement="top"></span></h2>
                    </span>

                    <div>
                        <h3 class="margin-top-20">
                            <?=$p->Title?>
                            <span style="float:right;background-color:<?php  
                                if($p->status==0)
                                    echo "green";
                                else if($p->status==1)
                                    echo "gold";
                                else
                                    echo "red";
                                ?> ;color: white;padding:5px;border-radius: 5px;">

                                <span size="1">Status : </span>
                                
                                <?php
                                if($p->status==0)
                                {
                                    echo "On Going";
                                }
                                else if($p->status==1)
                                {
                                    echo "Assigned";
                                }
                                else if($p->status==2)
                                {
                                    echo "Completed";
                                }
                                ?>
                            </span>
                        </h3>
                    </div>

                    <!-- <div class="blog-post-info-list margin-bottom-20">
                        <a href="#" class="blog-post-info">22 July 2019</a>
                        <a href="#"  class="blog-post-info">5 Comments</a>
                    </div> -->

                 
                    <p class="margin-top-20 margin-bottom-20" >
                       <?=$p->Description?> 
                    </p>

                </div>
                <?php
                    }
                ?>
            </div>
            <!-- Related Posts -->
            <div class="row">
            </div>
            <!-- Related Posts / End -->
                

            <!-- Comments -->
            <div class="row">
                <div class="col-xl-12">
                    <section class="comments">
                        <h3 class="margin-top-45 margin-bottom-0">Bids <span class="comments-amount"><?=count($bidsData)?></span></h3>

                        <ul>

                          <?php
                              foreach($bidsData as $b)
                              {
                          ?>

                            <li>
                                <div class="avatar"><img style="height: 70px;width: 70px;" src="<?=base_url('resources/shared/images/'.$b->ProfilePic)?>" alt=""></div>
                                <div class="comment-content"><div class="arrow-comment"></div>
                                    
                                    <div class="comment-by"><a href="<?= site_url('user/userc/managerProfile/'.$b->EventManagerID)?>"><b><?=$b->UserName?></b></a><span class="date"><?=$b->CreatedDateTime?></span>
                                        <!-- <a href="#" class="reply"><i class="fa fa-reply"></i> Accept</a> -->
                                        <?php
                                            if($b->EventManagerID==$_SESSION['uid'] and $_SESSION['utype']=="manager")
                                            {
                                        ?>
                                        <a  class="reply" href="<?=site_url("user/projectC/deleteBid/$b->BidID/$b->ProjectID")?>"><i class="fa fa-reply"></i>Delete Bid</a>
                                        <?php
                                            }
                                            else if($_SESSION['utype']=="user" and $projectData[0]->UserID==$_SESSION['uid'] and  $projectData[0]->status==0)
                                            {
                                        ?>
                                       <a  class="reply" href="<?=site_url("user/projectC/acceptProject/$b->EventManagerID/$b->ProjectID/$b->Price")?>"><i class="fa fa-reply"></i>Assign Project</a>
                                        <?php
                                            }
                                        ?>


                                    </div>
                                    <p>Quotation Price: <?=$b->Price?></p>
                                    <p><?=$b->Description?></p>
                                </div>

                                
                            </li>

                            <?php
                          } 
                          ?>  
                         </ul>

                    </section>
                </div>
            </div>
            <!-- Comments / End -->

            <?php 
                if($_SESSION['utype']=="manager" and count($myBids)==0 and $projectData[0]->status==0)
                {
            ?>
           
            <!-- Leava a Comment -->
            <div class="row">
                <div class="col-xl-12">
                    
                    <h3 class="margin-top-35 margin-bottom-30">Add Bid</h3>

                    <!-- Form -->
                    <form method="post" id="" action="<?=site_url('user/projectC/addBid/'.$p->ProjectID)?>">

                        <div class="row">
                            <div class="col-xl-12">
                                <div class="input-with-icon-left no-border">
                                    <i class="icon-material-outline-account-circle"></i>
                                    <input type="text" class="input-text" name="txtBid"  placeholder="Price" required/>
                                </div>
                            </div>
                           
                        </div>

                        <textarea  name="txtDesc" cols="300" rows="5" placeholder="Description"></textarea>
                    
                    <!-- Button -->
                        <button class="button button-sliding-icon ripple-effect margin-bottom-40" type="submit" >Add Bid <i class="icon-material-outline-arrow-right-alt"></i></button>
                    
                    </form>
                </div>
            </div>
            <?php
                }
            ?>
            <!-- Leava a Comment / End -->

        </div>
        <!-- Inner Content / End -->
        <div class="col-xl-4 col-lg-4 content-left-offset">
            <div class="sidebar-container">
            </div>
        </div>

    </div>
</div>

    <?php include_once("footer.php") ?>

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